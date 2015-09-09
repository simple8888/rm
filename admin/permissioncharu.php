<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php

    $permissionname=$_POST['permissionname']; 
    $permissioncode=$_POST['permissioncode'];
    $permission=$_POST['permission'];
        
    if(!$permissionname||!$permissioncode||!$permission){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='permissionshuru.php' ></center>";
      exit;}
    

      require('mysqli.inc.php ');//数据库连接

      $query="insert into permission (permissionname,permissioncode,permission) values(?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('sss',$permissionname,$permissioncode,$permission); 
      $stmt->execute();
       
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
      
include('permission.php');

?>
 

