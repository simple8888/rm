<?php
      include('common.php'); 
      require('mysqli.inc.php');
      
        $result=$mysqli->query("SELECT * FROM xiaoshi WHERE xiaoshiID=$_GET[xsID]");
        $arr=$result->fetch_assoc();
        $result->close();
        $mysqli->close();        
               $tpl->assign("xiaoshiID",$arr["xiaoshiID"]);
               $tpl->assign("niandu",$arr["niandu"]);	
	       $tpl->assign("gongchang",$arr["gongchang"]);
               $tpl->assign("xiaoshizd",$arr["xiaoshizd"]);
               $tpl->assign("rizuidi",$arr["rizuidi"]);
               $tpl->assign("yuezuidi",$arr["yuezuidi"]);			           
               $tpl->assign("beizhu",$arr["beizhu"]);

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 
              
      
               $tpl->assign("title","最低工资表修改");
               $tpl->display("default/kaoqinxiaoshimodify.tpl"); 

    
?>