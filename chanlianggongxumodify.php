<?php
      include('common.php'); 
      require('mysqli.inc.php');
      
        $result=$mysqli->query("SELECT * FROM gongxu WHERE gongxuID=$_GET[gxID]");
        $arr=$result->fetch_assoc();
        $result->close();
        $mysqli->close();         
               $tpl->assign("gongxuID",$arr["gongxuID"]);
	       $tpl->assign("gongchang",$arr["gongchang"]);
               $tpl->assign("chejian",$arr["chejian"]);			           
               $tpl->assign("gongxu",$arr["gongxu"]);
               $tpl->assign("gongjia",$arr["gongjia"]);
               $tpl->assign("beizhu",$arr["beizhu"]);

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 
                   
               $tpl->assign("title","工序信息表修改");
               $tpl->display("default/chanlianggongxumodify.tpl"); 

    
?>