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

    $ygongID=$_POST['ygongID'];//这一行和下一行，是为了日期为空时原路返回用的。
    $chanliangID=$_POST['chanliangID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']);
     $riqi=$_POST['riqi'];       

        
    if(!$riqi){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='chanlianggongzishuru.php?ygID=$ygongID&clID=$chanliangID' ></center>";
      exit;}

      require('mysqli.inc.php ');//数据库连接
      $result=$mysqli->query("select riqi from yuangong left join chanliang on yuangongID=ygongID where ($gzdd) and shifouzaizhi='是' ");
      @$i=0;
      while($row=$result->fetch_row()){
      $query="delete from chanliang where riqi='$riqi'";
      $mysqli->query($query); 
      if($riqi==$row[0]){$i=$i+1;}
        }
                
    //$mysqli->query("DELETE FROM kaoqin WHERE riqi is NULL and ygongID=$ygongID ");//删除第一次从renliziyuancharu.php插入的只有一个yuangongID字段的需要更新才能输入的记录 

      echo"<span>*</span>";
      echo $i.'条记录被删除';
      echo"<span>*</span>";
      //$stmt->close();
      $mysqli->close(); 
      
include('chanlianggongzicx.php');

?>
 

