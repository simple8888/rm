﻿<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
     
   //说是输入，实际上是更新
    
    $roleid=$_POST['roleid'];
    $rolename=$_POST['rolename'];
    $rolecode=$_POST['rolecode'];
    @$pe=$_POST['permissioncode'];//$pe是数组,把数组转成字符串才能存入数据库
    @$permissioncode=implode(',',$pe); //implode()函数,把数组元素组合为字符串。explode()函数,把字符串打散为数组。
    
        
    if(!$rolename||!$rolecode||!$permissioncode){
     echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='rolemodify.php?rlid=$roleid' ></center>";
      exit;}      

      require('mysqli.inc.php ');//数据库连接
      $query="UPDATE role SET rolename=?,rolecode=?,permissioncode=? WHERE roleid=?";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param("sssi",$rolename,$rolecode,$permissioncode,$roleid); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被修改';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('role.php');
?>
