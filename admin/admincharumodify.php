<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
     
   //说是输入，实际上是更新
    
    $adminid=$_POST['adminid'];
    $adminname=$_POST['adminname'];
    $password=$_POST['password'];
    $gongchang=$_POST['gongchang'];
    $bumen=$_POST['bumen'];
    $name=$_POST['name'];       
    $beizhu=$_POST['beizhu'];     
        
    if(!$adminname||!$password||!$name){
     echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='adminmodify.php?amid=$adminid' ></center>";
      exit;}      

      require('mysqli.inc.php ');//数据库连接
      $query="UPDATE admin SET adminname=?,password=?,gongchang=?,bumen=?,name=?,beizhu=? WHERE adminid=?";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param("ssssssi",$adminname,$password,$gongchang,$bumen,$name,$beizhu,$adminid); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被修改';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('admin.php');
?>
