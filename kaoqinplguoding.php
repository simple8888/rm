<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
    
    SESSION_START();
    //echo"$_SESSION[factory]";
    if(@$_SESSION[factory]=="bohan"){ $gzdd="gongzuodidian='博涵'";}
    if(@$_SESSION[factory]=="luomai"){ $gzdd="gongzuodidian='罗麦'";}
    if(@$_SESSION[factory]=="all"){  $gzdd="gongzuodidian='罗麦' or gongzuodidian='博涵'";}
    if(@$_SESSION[factory]==""){ $gzdd="gongzuodidian='罗麦' or gongzuodidian='博涵'";}

    if(@$_SESSION[zhuchang]=="是"){ $zfzc="shifouzhuchang='是'";}
    if(@$_SESSION[zhuchang]=="否"){ $zfzc="shifouzhuchang='否'";}
    if(@$_SESSION[zhuchang]=="全部"){ $zfzc="shifouzhuchang='是' or shifouzhuchang='否'";}
    if(@$_SESSION[zhuchang]==""){ $zfzc="shifouzhuchang='是' or shifouzhuchang='否'";}

    $ygongID=$_POST['ygongID'];//这一行和下一行，是为了日期为空时原路返回用的。
    $kaoqinID=$_POST['kaoqinID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']);
    $riqi=$_POST['riqi'];        
    $guodingdx=$_POST['guodingdx']; 
        
    if(!$riqi){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='kaoqinshuru.php?ygID=$ygongID&kqID=$kaoqinID' ></center>";
      exit;}

      require('mysqli.inc.php ');//数据库连接
     $result=$mysqli->query("select ygongID from  kaoqin ");//判断kaoqin表里的日期删完时，向kaoqin表插入ygongID
     $res=$mysqli->query("select yuangongID from yuangong where shifouzaizhi='否'"); 
//echo"$result->num_rows<br />";
//echo"$res->num_rows";
     if((($result->num_rows)==0)or(($result->num_rows)===($res->num_rows))){

      $result=$mysqli->query("select yuangongID from yuangong  where ($gzdd) and ($zfzc) and shifouzaizhi='是' ");
      while($row=$result->fetch_row()){
      $query="insert into kaoqin (ygongID) values(?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('i',$row[0]); 
      $stmt->execute(); } }        
      
      //向考勤表批量插入日期和国定待薪  
      $result=$mysqli->query("select ygongID from yuangong left join kaoqin on yuangongID=ygongID  where ($gzdd) and ($zfzc) and shifouzaizhi='是'  group by ygongID");
      while($row=$result->fetch_row()){
      $query="insert into kaoqin (ygongID,riqi,guodingdx) values(?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('iss',$row[0],$riqi,$guodingdx); 
      $stmt->execute();
      
      $mysqli->query("DELETE FROM kaoqin WHERE riqi is NULL and ygongID=$row[0] ");}

                 
   // $mysqli->query("DELETE FROM kaoqin WHERE riqi is NULL and ygongID=$ygongID ");//删除第一次从renliziyuancharu.php插入的只有一个yuangongID字段的需要更新才能输入的记录 

      echo"<span>*</span>";
      echo $result->num_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
    
include('kaoqincx.php');

?>
 

