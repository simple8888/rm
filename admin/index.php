<?php
	/*==================================================================*/
	/*		文件名:index.php                                    */
	/*		概要: 网站首页的功能处理脚本.    	   	    */
	/*		作者:                                               */
	/*		创建时间: 2015-06-03                                */
	/*		最后修改时间:                                       */
	/*		copyright (c)2015 la@gmail.com                      */
	/*==================================================================*/

	//包含通用的脚本文件
	//require "common.php";

if(isset($_GET['p'])){
          $p=$_GET['p'];
          }
  elseif(isset($_POST['p'])){
            $p=$_POST['p'];
              }
     else{$p=NULL;}

   SESSION_START();//开启session
   if($_SESSION['adminname']==null){
   header("location:../admin/login.php");}
       else{$adminname=$_SESSION['adminname'];}


switch($p){  
   case 'main':        
         include('main.php'); 
         break;

   case 'user':        
         include('user.php'); 
         break;

   case'role';        
         include('role.php');
         break;
   
   case 'permission':         
         include('permission.php'); 
         break;
   
   case 'that':
         
         include('that.php'); 
         break;

   case 'contact':       
         include('contact.php'); 
         break;

   case 'admin':       
         include('admin.php'); 
         break;

   default:       
         include('main.php');         
         break;
}

?>
