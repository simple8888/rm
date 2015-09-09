<?php
  
     require('common.php');

     include('mysqli.inc.php');//为了在输入界面显示工号和姓名
     $result=$mysqli->query("SELECT number,name FROM yuangong WHERE yuangongID=$_GET[ygID] ");
     $arr=$result->fetch_assoc();
     $tpl->assign("number",$arr["number"]);
     $tpl->assign("name",$arr["name"]);

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 

     error_reporting(0);//避免出现 Notice: Use of undefined constant ygID - assumed 'ygID'
     $tpl->assign("title","考勤等信息输入");
     $tpl->assign("ygongID",$_GET['ygID']);
     $tpl->assign("kaoqinID",$_GET['kqID']);     
     $tpl->display("default/kaoqinshuru.tpl"); 


?>