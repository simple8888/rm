<?php
	/*==================================================================*/
	/*		�ļ���:common.php                                   */
	/*		��Ҫ: ǰ̨ҳ�湫�õ�һЩ���ܴ���.       	    */
	/*		����:                                               */
	/*		����ʱ��: 2015-06-03                                */
	/*		����޸�ʱ��:                                       */
	/*		copyright (c)2015 jy@gmail.com                      */
	/*==================================================================*/
	
	//�ж�ϵͳ�Ƿ��Ѿ���װ�����û�а�װ���κ�һ��ҳ�涼�����Է���
	//if(!file_exists("install_lock.txt")){
	//	echo "�Բ��𣡱�ϵͳû�а�װ����ʹ��. &nbsp;&nbsp;&nbsp;&nbsp; ���� <a href='install/index.php'>��װ</a>";

	//	exit();		
	//}
	//���ع��õĳ�ʹ���ļ�
	require('cmsinit.inc.php');
	//����վ�ı�������ģ�壬������ҳ��ı���������ʾ
	//$tpl->assign("appName", APP_NAME);
	//����վ��Ӧ��·�����䵽ģ����
	//$tpl->assign("appPath",APP_PATH);
	//����վǰ̨����ʽ·�����䵽ģ����
	//$tpl->assign("stylePath", STYLE_PATH.APP_STYLE);
	//�������·������
	//$column=new Columns();
	//�������¶���
	//$article=new Article();
	//��ȡ�û�����ҳ���URL
	//$url ="http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	//����ǰҳ���URL���䵽ģ����
	//$tpl->assign("url", $url);

    @SESSION_START();//����session
    @$username=$_SESSION['username'];//���Ͻ���ʾ��ӭ��Ϣ

     require('mysqli.inc.php');//���ݿ����� 
     @$result=$mysqli->query("SELECT name,gongchang,bumen FROM user where username='$username'");
     $row=$result->fetch_assoc();//��ǰ̨���Ͻ���ʾ��ʵ����
     $result->close();  
     @$tpl->assign("nam",$row[name]);
     @$tpl->assign("fac",$row[gongchang]);
     @$tpl->assign("bumen",$row[bumen]);
     @$_SESSION['fac']=$row[gongchang];

     @$result=$mysqli->query("SELECT name,gongchang,bumen FROM admin where adminname='$adminname'");
     $row=$result->fetch_assoc();//�ں�̨���Ͻ���ʾ��ʵ����
     $result->close();  
     $mysqli->close();
     @$tpl->assign("na",$row[name]);
     @$tpl->assign("fa",$row[gongchang]);
     @$tpl->assign("bume",$row[bumen]);


        $tpl->assign("year",@date('Y'));//footer�����   
?>
