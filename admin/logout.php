<?php
     require('common.php');

    //注销登录  
    //SESSION_START();
    unset($_SESSION['userid']);  
    unset($_SESSION['username']);
echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
    echo '<center>注销登录成功！点击此处 <a href="../admin/login.php">登录</a></center>';  
    exit;  


?>