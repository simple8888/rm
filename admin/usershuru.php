<?php
  
     require('common.php');
     include('mysqli.inc.php');

     //为了在信息发布栏里输出角色和权限信息
     require('mysqli.inc.php');//数据库连接 
     @$result=$mysqli->query("SELECT * FROM role order by roleid DESC ");
     $arr=array();
     while($row=$result->fetch_assoc()){
           $arr[]=$row;}
     $result->close();
     $tpl->assign("biaoti","角色和权限发布栏");
     $tpl->assign("rolex",$arr);
     $tpl->assign("maohao",":");
     $tpl->assign("rolen","角色名");
     $tpl->assign("rolec","角色代码");

     //为了在信息发布栏里输出角色和权限信息
     @$result=$mysqli->query("SELECT * FROM permission order by permissionid DESC ");
     $arr=array();
     while($row=$result->fetch_assoc()){
           $arr[]=$row;}
     $result->close();
     $tpl->assign("permissionx",$arr);
     $tpl->assign("permissionn","权限名");
     $tpl->assign("permissionc","权限代码");

     //为了在用户表的角色代码里输出role表里的rolecode
     @$result=$mysqli->query("SELECT rolecode FROM role");
     while($row=$result->fetch_assoc()){    
        $ar[]=$row;}
     $r=$result->num_rows;//取得数组长度，用来决定smarty循环次数，去掉两行空格。   
     $tpl->assign("r",$r);    
     $tpl->assign("rolecd",$ar);
     $result->close();
     $mysqli->close();

     $tpl->assign("title","用户输入");    
     $tpl->display("../templates/admin/usershuru.tpl"); 


?>