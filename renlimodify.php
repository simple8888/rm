<?php
   //SESSION_START();//开启session
   //if(@$_SESSION['p']!=@renlimodify){ 
   //echo"<script>javascript:alert('你无访问权限!');javascript:history.back(-1);</script>";}

      include('common.php'); 
      require('mysqli.inc.php');
      
        $result=$mysqli->query("SELECT * FROM yuangong WHERE yuangongID=$_GET[ygID]");
        $arr=$result->fetch_assoc();
        $result->close();
        $mysqli->close();
                
               $tpl->assign("yuangongID",$arr["yuangongID"]);
	       $tpl->assign("number",$arr["number"]);
               $tpl->assign("name",$arr["name"]);			           
               $tpl->assign("sex",$arr["sex"]);
               $tpl->assign("birthday",$arr["birthday"]);
               $tpl->assign("idno",$arr["idno"]);
               $tpl->assign("cell",$arr["cell"]);
               $tpl->assign("tel",$arr["tel"]);
               $tpl->assign("email",$arr["email"]);
               $tpl->assign("marriage",$arr["marriage"]);
               $tpl->assign("hometown",$arr["hometown"]);
               $tpl->assign("livesite",$arr["livesite"]);
               $tpl->assign("zhiwu",$arr["zhiwu"]);
               $tpl->assign("ruzhiriqi",$arr["ruzhiriqi"]);
               $tpl->assign("hetongqixian",$arr["hetongqixian"]);
               $tpl->assign("gongzuodidian",$arr["gongzuodidian"]);
               $tpl->assign("shifouzhuchang",$arr["shifouzhuchang"]);
               $tpl->assign("shifouzaizhi",$arr["shifouzaizhi"]);
               $tpl->assign("lizhiriqi",$arr["lizhiriqi"]);
               $tpl->assign("feature",$arr["feature"]);
               $tpl->assign("memo",$arr["memo"]);

     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 
	     
               $tpl->assign("title","员工基本信息修改");
               $tpl->display("default/renlimodify.tpl"); 

    
?>