<?php
	/*==================================================================*/
	/*		�ļ���:cmsinit.inc.php                              */
	/*		��Ҫ: ������ϵͳ��ʹ����Ϣ.              	    */
	/*		����:                                               */
	/*		����ʱ��:                                           */
	/*		����޸�ʱ��:                                       */
	/*		copyright (c)2009 jy@gmail.com                      */
	/*==================================================================*/
	
	//����Session
	//session_start();
	//����ҳ����GB2312�����ı����ʾ
	//header("Content-type: text/html;charset=utf-8");
	//����ͨ�õ�ȫ�������ļ�
	require("config.inc.php");
	//����Smarty������ڵ��ļ�
	require (CMS_ROOT."libs/Smarty.class.php"); 
 
	//�����й����ڵĶ���ʱ��	
	date_default_timezone_set('PRC'); 	
	//�����Զ���������Ҫ�����ļ�
	function my_autoloader($class) {
    include (CMS_ROOT."class/$class.class.php");
    }
	//��Ҫ����������ע��my_autoloader($class)����
    spl_autoload_register('my_autoloader');
	//����һ��Smarty��Ķ���$tpl
	$tpl = new MyTpl(); 	
      		
?>
