<?php
  
     include('common.php');
     include('mysqli.inc.php');
      
        $result=$mysqli->query("SELECT number,name FROM yuangong WHERE yuangongID=$_GET[ygID] ");
        $arr=$result->fetch_assoc();
        $result->close();   
               $tpl->assign("number",$arr["number"]);
               $tpl->assign("name",$arr["name"]);

        $result=$mysqli->query("SELECT * FROM shebao WHERE ygongID=$_GET[ygID] and shebaoID=$_GET[sbID] ");
        $arr=$result->fetch_assoc();
        $result->close();
        $mysqli->close();
               $tpl->assign("shebaoID",$arr["shebaoID"]);
               $tpl->assign("ygongID",$arr["ygongID"]); 
               $tpl->assign("jishu",$arr["jishu"]);
               $tpl->assign("bili",$arr["bili"]);
               $tpl->assign("xianzhong",$arr["xianzhong"]);
               $tpl->assign("beizhu",$arr["beizhu"]);

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 

               $tpl->assign("title","员工社会保险信息修改");
               $tpl->display("default/kaoqinshebaomodify.tpl"); //实际上更新
?>