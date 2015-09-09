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

if(isset($_GET['p'])){//isset()函数判断变量是否被定义
      $p=$_GET['p'];
          }
  elseif(isset($_POST['p'])){
            $p=$_POST['p'];
              }
     else{$p=NULL;}

   SESSION_START();//开启session
   if($_SESSION['username']==null){
   header("location:login.php");}
       else{$username=$_SESSION['username'];}




     require('mysqli.inc.php');//数据库连接 
     @$result=$mysqli->query("SELECT rolecode FROM user where username='$username'");
     $row=$result->fetch_assoc();//通过用户名,得到用户表里的角色代码.
//echo"$row[rolecode]<br />";
     $roleco=explode(',',$row['rolecode']);//把角色代码转换为数组
     foreach($roleco as $val){//外层循环,遍历角色代码数组,输出角色代码
           //echo"$val";
     @$result=$mysqli->query("SELECT permissioncode FROM role where rolecode='$val'");//根据角色代码,在角色表里,查询权限代码
     $row=$result->fetch_assoc();//输出权限代码
     $permissionco=explode(',',$row['permissioncode']); //把权限代码转换为数组
     foreach($permissionco as $val){ //内层循环输出权限代码
           //echo"$val,";
     @$result=$mysqli->query("SELECT permission FROM permission where permissioncode='$val'");
     $row=$result->fetch_assoc();//根据权限代码得到对应的权限
           //echo"$row[permission],<br/>";
           @$pp.=$row[permission].',';//把权限连接成字符串，用逗号分隔,以便在循环外使用
 
}}
//echo"$pp";//可以输出权限字符串
     $result->close();  //关闭结果集
     $mysqli->close();  //关闭数据库
   
//array(main,salary,renliziyuan,renliziyuanshuru,renliziyuancx,renlimodif,kaoqin)

if( @strpos($pp, $p) !== false){ //如果$pp中包含$P,( @strpos($pp, $p) !== false)返回true  

switch($p){  //如查$p在$pp中,说明有访问权限
   case 'main':  
         include('main.php'); 
         break;

   case 'salary':        
         include('salary.php'); 
         break;

   case'renliziyuan';        
         include('renliziyuan.php');//人力资源
         break;  
   case 'renliziyuanshuru':         
         include('renliziyuanshuru.php'); 
         break;
   case 'renliziyuancx':        
         include('renliziyuancx.php'); 
         break;
   case 'renlimodify':        
         include('renlimodify.php'); 
         break;
   case 'renlidelete':        
         include('renlidelete.php'); 
         break;


   case 'kaoqin':         
         include('kaoqin.php'); //考勤
         break;
   case 'kaoqincx':         
         include('kaoqincx.php'); 
         break;
   case 'kaoqinshuru':         
         include('kaoqinshuru.php'); 
         break;
   case 'kaoqinmodify':         
         include('kaoqinmodify.php'); 
         break;
   case 'kaoqindelete':         
         include('kaoqindelete.php'); 
         break;

   case 'kaoqinshebao':       
         include('kaoqinshebao.php'); //社保表
         break;
   case 'kaoqinshebaocx':       
         include('kaoqinshebaocx.php'); 
         break;
   case 'kaoqinshebaomodify':       
         include('kaoqinshebaomodify.php'); 
         break;

   case 'kaoqinxiaoshi':       
         include('kaoqinxiaoshi.php'); //小时最低工资表
         break;
   case 'kaoqinxiaoshishuru':       
         include('kaoqinxiaoshishuru.php'); 
         break;
   case 'kaoqinxiaoshimodify':       
         include('kaoqinxiaoshimodify.php'); 
         break;
   case 'kaoqinxiaoshidelete':       
         include('kaoqinxiaoshidelete.php'); 
         break;

   case 'chanlianggongzi':         
         include('chanlianggongzi.php'); //产量工资
         break;
   case 'chanlianggongzicx':         
         include('chanlianggongzicx.php'); 
         break;
   case 'chanlianggongzishuru':         
         include('chanlianggongzishuru.php'); 
         break;
   case 'chanlianggongzimodify':         
         include('chanlianggongzimodify.php'); 
         break;
   case 'chanlianggongzidelete':         
         include('chanlianggongzidelete.php'); 
         break;

   case 'chanlianggongxu':        
         include('chanlianggongxu.php'); //工序表
         break;
   case 'chanlianggongxushuru':        
         include('chanlianggongxushuru.php');
         break;
   case 'chanlianggongxumodify':        
         include('chanlianggongxumodify.php');
         break;
   case 'chanlianggongxudelete':        
         include('chanlianggongxudelete.php');
         break;

   case 'chanliangzhouqi':       
         include('chanliangzhouqi.php'); //盘点周期表
         break;
   case 'chanliangzhouqishuru':       
         include('chanliangzhouqishuru.php');
         break;
   case 'chanliangzhouqimodify':       
         include('chanliangzhouqimodify.php');
         break;
   case 'chanliangzhouqidelete':       
         include('chanliangzhouqidelete.php');
         break;

   case 'zhilianggongzi':        
         include('zhilianggongzi.php'); //质量工资
         break;
   case 'zhilianggongzicx':        
         include('zhilianggongzicx.php'); 
         break;
   case 'zhilianggongzishuru':         
         include('zhilianggongzishuru.php'); 
         break;
   case 'zhilianggongzimodify':        
         include('zhilianggongzimodify.php'); 
         break;
   case 'zhilianggongzidelete':        
         include('zhilianggongzidelete.php'); 
         break;
   case 'zhilianghuizong':        
         include('zhilianghuizong.php'); 
         break;

   case 'gongzihuizong':         
         include('gongzihuizong.php'); 
         break;
   case 'gongzihuizongdayin':        
         include('gongzihuizongdayin.php'); //工资汇总打印
         break;
   case 'gongzihuizongcx':         
         include('gongzihuizongcx.php'); 
         break;
   case 'toexcel':         
         include('toexcel.php'); //导出excel
         break;

   case 'this':         
         include('this.php'); 
         break;
   
   case 'that':         
         include('that.php'); 
         break;

   case 'contact':        
         include('contact.php'); 
         break;

  // default:       
        // include('main.php');
        // break;
}}
 
else{ 
     echo"<script>javascript:alert('Sorry,你无访问权限! 如有需要,请联系管理员.');javascript:history.back(-1);</script>";
     //echo"<script>alert('你无访问权限');javascript:history.back(-1);</script>";
}



?>
