<?php
  
     include('common.php');
     include('mysqli.inc.php');

       
        $result=$mysqli->query("SELECT number,name FROM yuangong WHERE yuangongID=$_GET[ygID] ");
        $arr=$result->fetch_assoc();
        $result->close(); 

               $tpl->assign("number",$arr["number"]);
               $tpl->assign("name",$arr["name"]);

        $result=$mysqli->query("SELECT * FROM kaoqin WHERE ygongID=$_GET[ygID] and kaoqinID=$_GET[kqID] ");
        $arr=$result->fetch_assoc();
        $result->close();
        $mysqli->close();

               $tpl->assign("kaoqinID",$arr["kaoqinID"]);
               $tpl->assign("ygongID",$arr["ygongID"]); 
               $tpl->assign("riqi",$arr["riqi"]);
               $tpl->assign("fadingcq",$arr["fadingcq"]);
               $tpl->assign("fadingjb",$arr["fadingjb"]);
               $tpl->assign("zhoumojb",$arr["zhoumojb"]);
               $tpl->assign("guodingdx",$arr["guodingdx"]);
               $tpl->assign("hunjia",$arr["hunjia"]);
               $tpl->assign("chanjia",$arr["chanjia"]);
               $tpl->assign("sangjia",$arr["sangjia"]);
               $tpl->assign("bingjia",$arr["bingjia"]);
               $tpl->assign("pingshiqj",$arr["pingshiqj"]);
               $tpl->assign("zhoumoqj",$arr["zhoumoqj"]);
               $tpl->assign("quanqin",$arr["quanqin"]);
               $tpl->assign("dizeng",$arr["dizeng"]);
               $tpl->assign("peixun",$arr["peixun"]);
               $tpl->assign("jintie",$arr["jintie"]);
               $tpl->assign("hongbao",$arr["hongbao"]);
               $tpl->assign("fazhan",$arr["fazhan"]);
               $tpl->assign("gaowen",$arr["gaowen"]);
               $tpl->assign("gongshang",$arr["gongshang"]);
               $tpl->assign("shuidian",$arr["shuidian"]);

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 


               $tpl->assign("title","考勤&请假休假&福利&代扣款等数据修改");
               $tpl->display("default/kaoqinmodify.tpl"); //实际上更新


?>