<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php

    $ygongID=$_POST['ygongID'];//这一行和下一行，是为了日期为空时原路返回用的。
    $kaoqinID=$_POST['kaoqinID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']);
    $riqi=$_POST['riqi'];        

        
    if(!$riqi){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='kaoqinshuru.php?ygID=$ygongID&kqID=$kaoqinID' ></center>";
      exit;}

      require('mysqli.inc.php ');//数据库连接
      $result=$mysqli->query("select ygongID from kaoqin where gongzuodidian='罗麦' group by ygongID");

      while($row=$result->fetch_row()){
      $query="insert into kaoqin (ygongID,riqi) values(?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('is',$row[0],$riqi); 
      $stmt->execute(); }
                 
   // $mysqli->query("DELETE FROM kaoqin WHERE riqi is NULL and ygongID=$ygongID ");//删除第一次从renliziyuancharu.php插入的只有一个yuangongID字段的需要更新才能输入的记录 

      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
      
include('kaoqincx.php');

?>
 

