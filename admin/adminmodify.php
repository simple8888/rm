<?php
      include('common.php'); 
      require('mysqli.inc.php');

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
      
        $result=$mysqli->query("SELECT * FROM admin WHERE adminid=$_GET[amid]");
        $arr=$result->fetch_assoc();
        $result->close();
        $mysqli->close();       
               $tpl->assign("adminid",$arr["adminid"]);
               $tpl->assign("adminname",$arr["adminname"]);	
	       $tpl->assign("password",$arr["password"]);
               $tpl->assign("gongchang",$arr["gongchang"]);
               $tpl->assign("bumen",$arr["bumen"]);
               $tpl->assign("name",$arr["name"]);			           
               $tpl->assign("beizhu",$arr["beizhu"]);


   
               $tpl->assign("title","后台管理员表修改");
               $tpl->display("../templates/admin/adminmodify.tpl"); 

    
?>