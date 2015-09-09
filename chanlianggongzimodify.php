<?php
  
     include('common.php');
     include('mysqli.inc.php');

       
        $result=$mysqli->query("SELECT number,name FROM yuangong WHERE yuangongID=$_GET[ygID] ");
        $arr=$result->fetch_assoc();
        $result->close();

               $tpl->assign("number",$arr["number"]);
               $tpl->assign("name",$arr["name"]);

        $result=$mysqli->query("SELECT * FROM chanliang WHERE ygongID=$_GET[ygID] and chanliangID=$_GET[clID] ");
        $arr=$result->fetch_assoc();
        $result->close();


               $tpl->assign("chanliangID",$arr["chanliangID"]);
               $tpl->assign("ygongID",$arr["ygongID"]);
               $tpl->assign("gongxu",$arr["gongxu"]); 
               $tpl->assign("riqi",$arr["riqi"]);
               $tpl->assign("chanliang",$arr["chanliang"]);
               $tpl->assign("channengbt",$arr["channengbt"]);
               
               $tpl->assign("zhuanghuo",$arr["zhuanghuo"]);
               $tpl->assign("xiehuo",$arr["xiehuo"]);
               $tpl->assign("zahuo",$arr["zahuo"]);
               $tpl->assign("yichang",$arr["yichang"]);
               $tpl->assign("chanlianggongzi",$arr["chanlianggongzi"]);

     //为了在工序里输出gongxu表里的工序
     @$result=$mysqli->query("SELECT gongxu FROM gongxu where gongchang='$_GET[gzdd]' ");//在产量工资的查询里得到工作地点，确定输出哪个工厂里的工序 
     while($row=$result->fetch_assoc()){   
        $arr[]=$row;}
     $r=$result->num_rows;//取得数组长度，用来决定smarty循环次数，去掉两行空格。  
     $tpl->assign("r",$r);    
     $tpl->assign("gx",$arr);
     $result->close();
     $mysqli->close();
              
     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 

               $tpl->assign("title","产量工资信息数据修改");
               $tpl->display("default/chanlianggongzimodify.tpl"); //实际上更新


?>