<?php
  
     require('common.php');

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 

     $tpl->assign("title","最低工资输入");
     //$tpl->assign("content","adfasdf");
     $tpl->display("default/kaoqinxiaoshishuru.tpl"); 


?>