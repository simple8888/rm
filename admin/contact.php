<?php
     require('common.php');

     //为了在信息发布栏里输出角色和权限信息
     require('mysqli.inc.php');//数据库连接 
     @$result=$mysqli->query("SELECT * FROM role order by roleid DESC ");
     $arr=array();
     while($row=$result->fetch_assoc()){
           $arr[]=$row;}
     $result->close();
     //$tpl->assign("biaoti","角色和权限发布栏");
     //$tpl->assign("rolex",$arr);
     //$tpl->assign("maohao",":");
     //$tpl->assign("rolen","角色名");
     //$tpl->assign("rolec","角色代码");

     //为了在信息发布栏里输出角色和权限信息
     @$result=$mysqli->query("SELECT * FROM permission order by permissionid DESC ");
     $arr=array();
     while($row=$result->fetch_assoc()){
           $arr[]=$row;}
     $result->close();
     $mysqli->close();
     //$tpl->assign("permissionx",$arr);
     //$tpl->assign("permissionn","权限名");
     //$tpl->assign("permissionc","权限代码");

 

     $tpl->assign("title","系统后台管理");
     $tpl->display("../templates/admin/contact.tpl"); //默认模板在templates目录下,所以要从admin.php所在目录的父目录,才能找到templates目录,无论当前文件在哪个目录,最终都要跳转到templates目录.

?>