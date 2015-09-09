<?php

     require('common.php');


     //为了在盘点周期发布栏里输出zhouqi表里的盘点月份
     require('mysqli.inc.php');//数据库连接 
     @$result=$mysqli->query("SELECT * FROM zhouqi order by zhouqiID DESC limit 5");
     $arr=array();
     while($row=$result->fetch_assoc()){
           $arr[]=$row;}
     $result->close();
     $mysqli->close();

     $tpl->assign("biaoti","盘点周期发布栏");
     $tpl->assign("pandianzhouqifabu",$arr);
     $tpl->assign("maohao",":");
     $tpl->assign("zhi","至");

     $tpl->assign("title","工资核算");
     $tpl->display("default/salary.tpl"); 


?>