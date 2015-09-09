<?php
 	//包含通用的脚本文件
	require "common.php";
    $contact=array(
         array('name'=>'高某','fax'=>1234,'email'=>'jiangyong@163.com','tel'=>1523),     
         array('name'=>'淋透某','fax'=>4567,'email'=>'123yong@163.com','tel'=>1523),
         array('name'=>'高某','fax'=>1234,'email'=>'jiangyong@163.com','tel'=>1523),     
         array('name'=>'淋透某','fax'=>4567,'email'=>'123yong@163.com','tel'=>1523),
           );
        $tpl->assign('contact',$contact);
        $tpl->display("default/that.tpl");
?>