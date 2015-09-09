<?php
      include('common.php'); 
      require('mysqli.inc.php');
      
        $result=$mysqli->query("SELECT * FROM zhouqi WHERE zhouqiID=$_GET[zqID]");
        $arr=$result->fetch_assoc();
        $result->close();
        $mysqli->close();
                
               $tpl->assign("zhouqiID",$arr["zhouqiID"]);
	       $tpl->assign("gongchang",$arr["gongchang"]);
               $tpl->assign("pandianyuefen",$arr["pandianyuefen"]);			           
               $tpl->assign("qishiriqi",$arr["qishiriqi"]);
               $tpl->assign("zhongzhiriqi",$arr["zhongzhiriqi"]);
               $tpl->assign("beizhu",$arr["beizhu"]);

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 
                 
               $tpl->assign("title","工序信息表修改");
               $tpl->display("default/chanliangzhouqimodify.tpl"); 

    
?>