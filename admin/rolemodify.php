<?php
      include('common.php'); 

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
      
        $result=$mysqli->query("SELECT * FROM role WHERE roleid=$_GET[rlid]");
        $arr=$result->fetch_assoc();
        $result->close();
        $pe=explode(',',$arr["permissioncode"]);//explode()函数,把字符串打散为数组。(implode()函数,把数组元素组合为字符串)        
               $tpl->assign("roleid",$arr["roleid"]);
               $tpl->assign("rolename",$arr["rolename"]);	
	       $tpl->assign("rolecode",$arr["rolecode"]);
	       $tpl->assign("permissioncode",$pe);

     //为了在角色表的权限代码里输出permission表里的permissioncode
     @$result=$mysqli->query("SELECT permissioncode FROM permission");
     while($row=$result->fetch_assoc()){    
        $arr[]=$row;}
     $r=$result->num_rows;//取得数组长度，用来决定smarty循环次数，去掉两行空格。   
     $tpl->assign("r",$r);    
     $tpl->assign("permissioncd",$arr);
     $result->close();
     $mysqli->close();
     
               $tpl->assign("title","角色表修改");
               $tpl->display("../templates/admin/rolemodify.tpl"); 

    
?>