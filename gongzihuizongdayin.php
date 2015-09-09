<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
        error_reporting(0);//避免出现 Notice: Use of undefined constant 
        SESSION_START();
        if($_GET['clearsession']){
          $_SESSION['qishiriqi']='';
          $_SESSION['zhongzhiriqi']='';
          $_SESSION['number']='';
          $_SESSION['name']='';
          $_SESSION['factory']=''; 
          $_SESSION['pandianzhouqi']=''; }
   	include('common.php');                            //包含Smarty类库所在的文件   
        //include('class/mysqli.inc.php');            	
	require("class/Page.class.php");                  //包含分页类Page所在的文件
	require("class/MyDBCX.class.php");                //包含数据库读取类所在的文件
                 
         if(($_GET['qishiriqi']!=null)or($_GET['zhongzhiriqi']!=null)or($_GET['number']!=null)or($_GET['name']!=null)or($_GET['factory']!=null)){
             $_SESSION['qishiriqi']=$_GET['qishiriqi'];
             $_SESSION['zhongzhiriqi']=$_GET['zhongzhiriqi'];
             $_SESSION['number']=$_GET['number'];
             $_SESSION['name']=$_GET['name'];
             $_SESSION['factory']=$_GET['factory'];
             $_SESSION['pandianzhouqi']=$_GET['pandianzhouqi'];}

          $qishirq=$_SESSION['qishiriqi'];
          $zhongzhirq=$_SESSION['zhongzhiriqi'];
          $number=$_SESSION['number'];
          $name=$_SESSION['name'];
          $factory=$_SESSION['factory'];
          $pandianzhouqi=$_SESSION['pandianzhouqi'];

          $pdzq=substr($pandianzhouqi,6);//在日期里显示盘点月份。php和mysql里使用的函数是不一样的
          //$pdzq=$pandianzhouqi;//在日期里显示盘点月份，带厂名
      

     require('mysqli.inc.php');//通过盘点周期，取得盘点周期表里的起始日期和终止日期
     @$result=$mysqli->query("SELECT qishiriqi,zhongzhiriqi FROM zhouqi where gongchang=left('$pandianzhouqi',2) and pandianyuefen=substr('$pandianzhouqi',3) ");
     @$arr=$result->fetch_assoc(); 
     $result->close(); 
     //echo"$arr[qishiriqi]<br />";
     //echo"$arr[zhongzhiriqi]<br />";
     if($pandianzhouqi!=""){//如果盘点周期不为空时，使用盘点周期，为空时，使用表单传来的起始和终止日期
     $qishirq=$arr[qishiriqi];
     $zhongzhirq=$arr[zhongzhiriqi];}

//更改3个视图
$mysqli->query("ALTER VIEW kaoqin_view AS
SELECT ygongID,sum(fadingcq) as fadingcq,sum(fadingjb) as fadingjb,sum(zhoumojb) as zhoumojb,sum(guodingdx) as guodingdx,sum(hunjia) as hunjia,sum(chanjia) as chanjia,sum(sangjia) as sangjia,sum(bingjia) as bingjia,sum(pingshiqj) as pingshiqj,sum(zhoumoqj) as zhoumoqj,sum(quanqin) as quanqin,sum(dizeng) as dizeng,sum(peixun) as peixun,sum(jintie) as jintie,sum(hongbao) as hongbao,sum(fazhan) as fazhan,sum(gaowen) as gaowen,sum(gongshang) as gongshang,sum(shuidian) as shuidian 
FROM kaoqin 
WHERE riqi between '$qishirq' and '$zhongzhirq'
group by ygongID
order by ygongID DESC");
 
$mysqli->query("ALTER VIEW chanliang_view AS 
SELECT ygongID,riqi,sum(channengbt) as channengbt,sum(zuidibt) as zuidibt,sum(zhuanghuo) as zhuanghuo,sum(xiehuo) as xiehuo,sum(zahuo) as zahuo,sum(yichang) as yichang,sum(chanlianggongzi) as chanlianggongzi
FROM chanliang 
WHERE riqi between '$qishirq' and '$zhongzhirq'
group by ygongID
order by ygongID DESC"); 

$mysqli->query("ALTER VIEW zhiliang_view AS
SELECT ygongID,sum(zhiliangjl) as zhiliangjl,sum(zhiliangkk) as zhiliangkk,sum(zhilianggongzi) as zhilianggongzi
FROM zhiliang  
WHERE riqi between '$qishirq' and '$zhongzhirq'
group by ygongID
order by ygongID DESC");

     //为了在工资汇总的盘点周期里输出zhouqi表里的盘点月份
     @$result=$mysqli->query("SELECT concat(gongchang,pandianyuefen) as gongpan FROM zhouqi ");
     while($row=$result->fetch_assoc()){    
        $arr[]=$row;}
     $r=$result->num_rows;//取得数组长度，用来决定smarty循环次数，去掉两行空格。   
     $tpl->assign("r",$r);    
     $tpl->assign("yf",$arr);
     $result->close();

     //为了在工资汇总里得到 小时最低工资和日最低工资
     $niandu=substr($qishirq,0,4);//特别注意substr()函数在php和mysql里的不同用法，在php里从0开始，mysql里从1开始。
//echo"$niandu<br />";
//echo"$factory<br />";
       if($pandianzhouqi!=""){//如果盘点周期不为空时，使用盘点周期里的日期和工厂
       $niandu=substr($pandianzhouqi,6,4);
       $factory=substr($pandianzhouqi,0,6);}
       //echo"$niandu<br />";
       //echo"$factory<br />";
     //如果盘点周期为空时，使用查询里的起始日期和工厂，其中起始日期用来确定小时最低工资表里的年度
     if($factory=="all"){      
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>没有选择工厂,各工厂最低工资标准可能不同,不选择工厂无法完成工资汇总!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='index.php?p=gongzihuizong' ></center>";
      exit;}
     @$result=$mysqli->query("SELECT xiaoshizd,rizuidi FROM xiaoshi where niandu='$niandu' and gongchang='$factory'");
     @$arr=$result->fetch_assoc();
     $xiaoshizd=$arr[xiaoshizd];//小时最低工资
     $rizuidi=$arr[rizuidi];//日最低工低
     //echo"$xiaoshizd"; 
     //echo"$rizuidi";
     $result->close();
     $mysqli->close();

     //if(($xiaoshizd=="")||($rizuidi=="")){      
      //echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      //echo"<center>你所选的盘点周期对应的年度小时最低工资或日最低工资有一项为空,补充完整后才能汇总工资!</center>";echo"<br />";
      //echo"<center><input class='button'type='button' value='返回' onClick=window.location.href='index.php?p=gongzihuizong' ></center>";
      //exit;}

        /*在GET方法中获取用户提交的页面索引数字。默认第一页，页面索引$current_page值为1*/
	$current_page=isset($_GET['page'])?intval($_GET['page']):1;

     	/* 通过is_cached()方法判断指定的页面是否已经被缓存，如果是则不再执行数据库操作 */
	if(!$tpl->isCached("default/kaoqincx.tpl", $current_page)) {


               // if(($qishirq!=null)and($zhongzhirq!=null)){   
               //     $rq="and ((zhiliang.riqi between ('$qishirq') and ('$zhongzhirq'))  or zhiliang.riqi is null) ";}
                if($number!=null){
                    $nb="and yuangong.number=$number ";}
                if($name!=null){
                    $nm="and yuangong.name='$name' ";}
                if($factory=="罗麦"){
                    $ft="and yuangong.gongzuodidian='罗麦' ";}
                if($factory=="博涵"){
                    $ft="and yuangong.gongzuodidian='博涵' ";}
                if($zhuchang=="是"){
                    $zc="and yuangong.shifouzhuchang='是' ";}
                if($zhuchang=="否"){
                    $zc="and yuangong.shifouzhuchang='否' ";}
                
                $sql2="select number,name,yuangongID,fadingcq,fadingjb,zhoumojb,guodingdx,hunjia,chanjia,sangjia,bingjia,pingshiqj,zhoumoqj,quanqin,dizeng,peixun,jintie,hongbao,fazhan,gaowen,gongshang,shuidian,channengbt,zuidibt,zhuanghuo,xiehuo,zahuo,yichang,chanlianggongzi,zhilianggongzi  From yuangong left join kaoqin_view on yuangongID=kaoqin_view.ygongID left join chanliang_view ON yuangongID=chanliang_view.ygongID left join zhiliang_view ON yuangongID=zhiliang_view.ygongID where (1=1)";
                $s="and shifouzaizhi='是' ";  
                
                $sql2.=@$rq; 
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$zc;
                $sql2.=@$s;

                $mydb=new MyDBCX();//创建数据库操作类MyDBCX的对象
               
                $total=$mydb->getRowTotal($sql2);              	//调用MyDB类的方法返回数据表记录总数       
                $fpage=new Page($total,$current_page,500);    	//通过获取的值创建分页类Page的对象		
                $pageInfo=$fpage->getPageInfo();           	//获取和当前页面有关的所有信息数组 
		
         	/* 通过调用MyDB中的方法，获取当前页面所需要的所有记录的数据数组 */
                $offset=$pageInfo["row_offset"];
                $num=$pageInfo["row_num"];

                //if(($qishirq!=null)and($zhongzhirq!=null)){   
                //    $rq="and ((chanliang.riqi between ('$qishirq') and ('$zhongzhirq'))  or chanliang.riqi is null) and yuangong.shifouzaizhi='是'  ";}
                if($number!=null){
                    $nb="and yuangong.number=$number and yuangong.shifouzaizhi='是'  ";}
                if($name!=null){
                    $nm="and yuangong.name='$name' and yuangong.shifouzaizhi='是'  ";}
                if($factory=="罗麦"){
                    $ft="and yuangong.gongzuodidian='罗麦' and yuangong.shifouzaizhi='是'  ";}
                if($factory=="博涵"){
                    $ft="and yuangong.gongzuodidian='博涵' and yuangong.shifouzaizhi='是'  ";}
                if($zhuchang=="是"){
                    $zc="and yuangong.shifouzhuchang='是' and yuangong.shifouzaizhi='是'  ";}
                if($zhuchang=="否"){
                    $zc="and yuangong.shifouzhuchang='否' and yuangong.shifouzaizhi='是'  ";}
               
                $sql2="select number,name,yuangongID,fadingcq,fadingjb,zhoumojb,guodingdx,hunjia,chanjia,sangjia,bingjia,pingshiqj,zhoumoqj,quanqin,dizeng,peixun,jintie,hongbao,fazhan,gaowen,gongshang,shuidian,channengbt,zuidibt,zhuanghuo,xiehuo,zahuo,yichang,chanlianggongzi,zhilianggongzi,shebao  From yuangong left join kaoqin_view on yuangongID=kaoqin_view.ygongID left join chanliang_view ON yuangongID=chanliang_view.ygongID left join zhiliang_view ON yuangongID=zhiliang_view.ygongID left join shebao ON yuangongID=shebao.ygongID where (1=1)";
                $s="and shifouzaizhi='是' group by yuangongID  ORDER BY yuangongID DESC LIMIT $offset, $num";  
                $sql2.=@$rq; 
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$zc;
                $sql2.=@$s;
  
                $gongzihuizong=$mydb->getPageRows($sql2);
		if($gongzihuizong) {                           	//如果从数据库中获取到商品记录
			$tpl->assign("tableName", "$pandianzhouqi"."员工工资汇总表");  //分配页面显示的表面到模板中
			$tpl->assign("url", "gongzihuizongcx.php");       //分配分页处理文件的URL到模板中
			$tpl->assign("gongzihuizong", $gongzihuizong);    //将在本页显示的所有数据数组分配给模板
			$tpl->assign("pageInfo", $pageInfo);    //将和当前页有关的所有信息数组分配给模板
                         
                        $tpl->assign("qishiriqi",$qishirq);
                        $tpl->assign("zhongzhiriqi",$zhongzhirq);
                        $tpl->assign("number",$number);
                        $tpl->assign("name",$name);
                        $tpl->assign("factory",$factory);
                        $tpl->assign("pandianzhouqi",$pandianzhouqi);
                        $tpl->assign("pdzq",$pdzq);//按盘点周期查询时，在工资汇总表的日期里显示年月
                        $tpl->assign("xiaoshizd",$xiaoshizd);//小时最低工资
                        $tpl->assign("rizuidi",$rizuidi);//日最低工资

                        }else {                                 	//如果没有获取到任何员工记录
			             
			echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";//输出一行提示信息
                        echo"<center>员工工资汇总表中查无此人!</center>";echo"<br />";
                        echo"<center><input class='button'type='button' value='返回' onClick=window.location.href='index.php?p=zhilianggongzi' ></center>";
                        exit;                              	//并退出程序
		}
	}
	
     $tpl->assign("title","工资汇总打印");
     $tpl->display("default/gongzihuizongdayin.tpl", $current_page);     //加载输出模板kaoqin.tpl，并指定页面缓存标号
     
?>