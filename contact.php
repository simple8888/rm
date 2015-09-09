<?php
  
     require('common.php');


     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$arr); 
     $tpl->assign("title","联系我们");
     //$tpl->assign("content","adfasdf");
     $tpl->display("default/contact.tpl"); 


?>