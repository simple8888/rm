<?php

     require('common.php');

     $arr=array(
          array('gongchang'=>'信息发布信息发布信息发布信息发布信息发布信息发布信息发布','pandianyuefen'=>'信息发布','qishiriqi'=>'','zhongzhiriqi'=>''),
          );
     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$arr);
     $tpl->assign("maohao","");
     $tpl->assign("zhi","");

     $tpl->assign("title","系统首页");
     $tpl->display("default/main.tpl"); 


?>