<?php
  
     require('common.php');

     include('mysqli.inc.php');//为了在输入界面显示工号和姓名
     $result=$mysqli->query("SELECT yuangongID,number,name FROM yuangong WHERE yuangongID=$_GET[ygID] ");
     $arr=$result->fetch_assoc();
     $result->close();
     $tpl->assign("number",$arr["number"]);
     $tpl->assign("name",$arr["name"]);

     $result=$mysqli->query("SELECT gongxu FROM yuangong left join chanliang ON yuangongID=ygongID where yuangongID=$_GET[ygID] order by chanliang.riqi DESC ");
     $ar=$result->fetch_assoc();//得到该员工最近一次被输入的工序
     $result->close();
     //echo"$ar[gongxu]";
     if($ar['gongxu']!=""){
     $tpl->assign("gongxu",$ar["gongxu"]);}

     //为了在工序里输出gongxu表里的工序
     @$result=$mysqli->query("SELECT gongxu FROM gongxu where gongchang='$_GET[gzdd]' ");//在产量工资的查询里得到工作地点，确定输出哪个工厂里的工序
     while($row=$result->fetch_assoc()){    
        $arr[]=$row;}
     $r=$result->num_rows;//取得数组长度，用来决定smarty循环次数，去掉两行空格。   
     $tpl->assign("r",$r);    
     $tpl->assign("gx",$arr);
     $result->close();
     $mysqli->close();

     error_reporting(0);//避免出现 Notice: Use of undefined constant ygID - assumed 'ygID'
     $tpl->assign("title","产量工资信息输入");
     $tpl->assign("ygongID",$_GET['ygID']);
     $tpl->assign("chanliangID",$_GET['clID']);

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar1); 
  
     $tpl->display("default/chanlianggongzishuru.tpl"); 


?>

