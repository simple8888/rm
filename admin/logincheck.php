<?php
     require('common.php');

if(!isset($_POST['submit'])){  
    exit('非法访问!');  
}  
$adminname = htmlspecialchars($_POST['adminname']);  
$password = $_POST['password'];//原来是MD5($_POST['password']),因放入数据库时没加密，所以要去掉MD5()函数
 
require('mysqli.inc.php');//数据库连接
$check_query = $mysqli->query("select adminid from admin where adminname='$adminname' and password='$password' limit 1");  
if($result = $check_query->fetch_array()){  
    //登录成功  
    SESSION_START();  
    $_SESSION['adminname'] = $adminname;  
    $_SESSION['adminid'] = $result['adminid'];  
    //echo $username,' 欢迎你！<br />'; 
    //echo '点击此处 <a href="login.php?action=logout">注销</a> 登录!<br />';  
    //exit; 
    header("Location:../admin/index.php?p=main");exit;

   //if($username!=3){
   //header("location:login.php");exit;}
   //else{ header("location:index.php");exit;}
  
} else {
    echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";  
    echo"<center>用户名或密码错误,登录失败！点击此处 <a href='javascript:history.back(-1);'>返回</a> 重试'</center>";
    exit;   
}
 


     

     $tpl->assign("title","请登录系统后台");
     $tpl->display("../templates/admin/login.tpl"); 

?>