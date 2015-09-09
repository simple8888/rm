<?php
	/*==================================================================*/
	/*		文件名:cmsinit.inc.php                              */
	/*		概要: 公共的系统初使化信息.              	    */
	/*		作者:                                               */
	/*		创建时间:                                           */
	/*		最后修改时间:                                       */
	/*		copyright (c)2009 jy@gmail.com                      */
	/*==================================================================*/
	
	//开启Session
	//session_start();
	//设置页面以GB2312的中文编号显示
	//header("Content-type: text/html;charset=utf-8");
	//包含通用的全局配置文件
	require("config.inc.php");
	//包含Smarty类库所在的文件
	require (CMS_ROOT."libs/Smarty.class.php"); 
 
	//设置中国所在的东八时区	
	date_default_timezone_set('PRC'); 	
	//设置自动加载所需要的类文件
	function my_autoloader($class) {
    include (CMS_ROOT."class/$class.class.php");
    }
	//需要用下面的语句注册my_autoloader($class)函数
    spl_autoload_register('my_autoloader');
	//创建一个Smarty类的对象$tpl
	$tpl = new MyTpl(); 	
      		
?>
