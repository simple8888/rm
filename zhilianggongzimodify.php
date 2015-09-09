<?php
  
     include('common.php');
     include('mysqli.inc.php');
      
        $result=$mysqli->query("SELECT number,name FROM yuangong WHERE yuangongID=$_GET[ygID] ");
        $arr=$result->fetch_assoc();
        $result->close();   
               $tpl->assign("number",$arr["number"]);
               $tpl->assign("name",$arr["name"]);

        $result=$mysqli->query("SELECT * FROM zhiliang WHERE ygongID=$_GET[ygID] and zhiliangID=$_GET[zlID] ");
        $arr=$result->fetch_assoc();
        $result->close();
        $mysqli->close();
               $tpl->assign("zhiliangID",$arr["zhiliangID"]);
               $tpl->assign("ygongID",$arr["ygongID"]); 
               $tpl->assign("riqi",$arr["riqi"]);
               $tpl->assign("zhiliangjl",$arr["zhiliangjl"]);
               $tpl->assign("zhiliangkk",$arr["zhiliangkk"]);

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar);               

               $tpl->assign("title","质量工资信息数据修改");
               $tpl->display("default/zhilianggongzimodify.tpl"); //实际上更新
?>