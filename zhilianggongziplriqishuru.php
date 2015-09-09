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

    if(@$_SESSION[zhuchang]=="是"){ $sfzc="shifouzhuchang='是'";}//sfzc=shifouzhuchang
    if(@$_SESSION[zhuchang]=="否"){ $sfzc="shifouzhuchang='否'";}
    if(@$_SESSION[zhuchang]=="全部"){ $sfzc="shifouzhuchang='是' or shifouzhuchang='否'";}
    if(@$_SESSION[zhuchang]==""){ $sfzc="shifouzhuchang='是' or shifouzhuchang='否'";}

    $ygongID=$_POST['ygongID'];//这一行和下一行，是为了日期为空时原路返回用的。
    $zhiliangID=$_POST['zhiliangID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']);
    $riqi=$_POST['riqi'];
    //$zhiliangjl=$_POST['zhiliangjl'];
    //$zhiliangkk=$_POST['zhiliangkk'];
    //$zhilianggongzi=$zhiliangjl-$zhiliangkk;        

        
    if(!$riqi){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='zhilianggongzishuru.php?ygID=$ygongID&zlID=$zhiliangID' ></center>";
      exit;}

      require('mysqli.inc.php ');//数据库连接
     //$result=$mysqli->query("select ygongID from zhiliang ");//判断zhiliang表里的日期删完同时ygongID删除完时，向zhiliang表插入ygongID
     //$res=$mysqli->query("select yuangongID from yuangong where shifouzaizhi='否'"); 
//echo"$result->num_rows<br />";
//echo"$res->num_rows";
     //if((($result->num_rows)==0)or(($result->num_rows)===($res->num_rows))){
      //$result=$mysqli->query("select yuangongID from yuangong  where ($gzdd) and ($sfzc) and shifouzaizhi='是' ");
      //while($row=$result->fetch_row()){
      //$query="insert into zhiliang (ygongID) values(?)";
      //$stmt=$mysqli->prepare($query);
      //$stmt->bind_param('i',$row[0]); 
      //$stmt->execute(); } }//改进了批量删除日期后，ygongID不会全部从表里完全删除了，以上判断用不到了        
      
      //向zhiliang表批量插入日期,空表必须按yuangongID排序后才能批量插入    
      $result=$mysqli->query("select ygongID from yuangong left join zhiliang on yuangongID=ygongID  where ($gzdd) and ($sfzc) and shifouzaizhi='是'  group by ygongID");
      while($row=$result->fetch_row()){
      $query="insert into zhiliang (ygongID,riqi) values(?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('is',$row[0],$riqi); 
      $stmt->execute();
      
      $mysqli->query("DELETE FROM zhiliang WHERE riqi is NULL and ygongID=$row[0] ");}//删除第一次从renliziyuancharu.php插入的只有一个yuangongID字段的需要更新才能输入的记录 

      echo"<span>*</span>";
      echo $result->num_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
    
include('zhilianggongzicx.php');

?>
 

