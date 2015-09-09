<?php
  
     require('common.php');

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 

     $tpl->assign("title","员工信息输入");
     $tpl->assign("content","adfasdf");
     $tpl->display("default/renliziyuanshuru.tpl"); 



?>