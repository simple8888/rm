<?php
          SESSION_START();
          $_SESSION['qishiriqi']='';
          $_SESSION['zhongzhiriqi']='';
          $_SESSION['number']='';
          $_SESSION['name']='';
          $_SESSION['factory']='';
          $_SESSION['zhuchang']=''; 

   	include('common.php');                            //包含Smarty类库所在的文件   
        //include('class/mysqli.inc.php');
                    	
	require("class/Page.class.php");                  //包含分页类Page所在的文件
	require("class/MyDBCX.class.php");                //包含数据库读取类所在的文件
	
        @$qishirq=$_GET['qishiriqi'];
        @$zhongzhirq=$_GET['zhongzhiriqi'];
        @$number=$_GET['number'];
        @$name=$_GET['name'];
        @$factory=$_GET['factory'];

require('mysqli.inc.php');//数据库连接 
$mysqli->query("ALTER VIEW kaoqin_view AS
SELECT ygongID,sum(fadingcq) as fadingcq,sum(fadingjb) as fadingjb,sum(zhoumojb) as zhoumojb,sum(guodingdx) as guodingdx,sum(hunjia) as hunjia,sum(chanjia) as chanjia,sum(sangjia) as sangjia,sum(bingjia) as bingjia,sum(pingshiqj) as pingshiqj,sum(zhoumoqj) as zhoumoqj,sum(quanqin) as quanqin,sum(dizeng) as dizeng,sum(peixun) as peixun,sum(jintie) as jintie,sum(hongbao) as hongbao,sum(fazhan) as fazhan,sum(gaowen) as gaowen,sum(gongshang) as gongshang,sum(shuidian) as shuidian 
FROM kaoqin 
group by ygongID
order by ygongID DESC");
 
$mysqli->query("ALTER VIEW chanliang_view AS 
SELECT ygongID,riqi,sum(channengbt) as channengbt,sum(zuidibt) as zuidibt,sum(zhuanghuo) as zhuanghuo,sum(xiehuo) as xiehuo,sum(zahuo) as zahuo,sum(yichang) as yichang,sum(chanlianggongzi) as chanlianggongzi
FROM chanliang 
group by ygongID
order by ygongID DESC"); 

$mysqli->query("ALTER VIEW zhiliang_view AS
SELECT ygongID,sum(zhiliangjl) as zhiliangjl,sum(zhiliangkk) as zhiliangkk,sum(zhilianggongzi) as zhilianggongzi
FROM zhiliang  
group by ygongID
order by ygongID DESC");


     //为了在工资汇总的盘点周期里输出zhouqi表里的盘点月份
     @$result=$mysqli->query("SELECT concat(gongchang,pandianyuefen) as gongpan FROM zhouqi");
     while($row=$result->fetch_assoc()){    
        $arr[]=$row;}
     $r=$result->num_rows;//取得数组长度，用来决定smarty循环次数，去掉两行空格。   
     $tpl->assign("r",$r);    
     $tpl->assign("yf",$arr);
     $result->close();
     $mysqli->close();


        /*在GET方法中获取用户提交的页面索引数字。默认第一页，页面索引$current_page值为1*/
	$current_page=isset($_GET['page'])?intval($_GET['page']):1;

     	/* 通过is_cached()方法判断指定的页面是否已经被缓存，如果是则不再执行数据库操作 */
	if(!$tpl->isCached("default/gongzihuizong.tpl", $current_page)) {


                if(($qishirq!=null)and($zhongzhirq!=null)){   
                    $rq="and ((zhiliang.riqi between ('$qishirq') and ('$zhongzhirq'))  or zhiliang.riqi is null) ";}
                if($number!=null){
                    $nb="and yuangong.number=$number ";}
                if($name!=null){
                    $nm="and yuangong.name='$name' ";}
                if($factory=="luomai"){
                    $ft="and yuangong.gongzuodidian='罗麦' ";}
                if($factory=="bohan"){
                    $ft="and yuangong.gongzuodidian='博涵' ";}
                
                $sql2="select number,name,yuangongID,fadingcq,fadingjb,zhoumojb,guodingdx,hunjia,chanjia,sangjia,bingjia,pingshiqj,zhoumoqj,quanqin,dizeng,peixun,jintie,hongbao,fazhan,gaowen,gongshang,shuidian,channengbt,zuidibt,zhuanghuo,xiehuo,zahuo,yichang,chanlianggongzi,zhilianggongzi  From yuangong left join kaoqin_view on yuangongID=kaoqin_view.ygongID left join chanliang_view ON yuangongID=chanliang_view.ygongID left join zhiliang_view ON yuangongID=zhiliang_view.ygongID where (1=1)";
                $s="and shifouzaizhi='是' "; 
                
                $sql2.=@$rq; 
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$s;

                $mydb=new MyDBCX();//创建数据库操作类MyDB的对象
               

                $total=$mydb->getRowTotal($sql2);              	//调用MyDB类的方法返回数据表记录总数       
                $fpage=new Page($total,$current_page,20);    	//通过获取的值创建分页类Page的对象		
                $pageInfo=$fpage->getPageInfo();           	//获取和当前页面有关的所有信息数组 
		
         	/* 通过调用MyDB中的方法，获取当前页面所需要的所有记录的数据数组 */
                $offset=$pageInfo["row_offset"];
                $num=$pageInfo["row_num"];

            

                if(($qishirq!=null)and($zhongzhirq!=null)){   
                    $rq="and ((chanliang.riqi between ('$qishirq') and ('$zhongzhirq'))  or chanliang.riqi is null) and yuangong.shifouzaizhi='是'  ";}
                if($number!=null){
                    $nb="and yuangong.number=$number and yuangong.shifouzaizhi='是'  ";}
                if($name!=null){
                    $nm="and yuangong.name='$name' and yuangong.shifouzaizhi='是'  ";}
                if($factory=="luomai"){
                    $ft="and yuangong.gongzuodidian='罗麦' and yuangong.shifouzaizhi='是'  ";}
                if($factory=="bohan"){
                    $ft="and yuangong.gongzuodidian='博涵' and yuangong.shifouzaizhi='是'  ";}

                $sql2="select number,name,yuangongID,fadingcq,fadingjb,zhoumojb,guodingdx,hunjia,chanjia,sangjia,bingjia,pingshiqj,zhoumoqj,quanqin,dizeng,peixun,jintie,hongbao,fazhan,gaowen,gongshang,shuidian,channengbt,zuidibt,zhuanghuo,xiehuo,zahuo,yichang,chanlianggongzi,zhilianggongzi,shebao  From yuangong left join kaoqin_view on yuangongID=kaoqin_view.ygongID left join chanliang_view ON yuangongID=chanliang_view.ygongID left join zhiliang_view ON yuangongID=zhiliang_view.ygongID left join shebao ON yuangongID=shebao.ygongID where (1=1)";
                $s="and shifouzaizhi='是'   group by yuangongID  ORDER BY yuangongID DESC LIMIT $offset, $num";               
     	        //$sql2="select number,name,yuangongID,sum(fadingcq) as fadingcq,sum(fadingjb) as fadingjb,sum(zhoumojb) as zhoumojb,sum(guodingdx) as guodingdx,sum(hunjia) as hunjia,sum(chanjia) as chanjia,sum(sangjia) as sangjia,sum(bingjia) as bingjia,sum(pingshiqj) as pingshiqj,sum(zhoumoqj) as zhoumoqj,sum(quanqin) as quanqin,sum(dizeng) as dizeng,sum(peixun) as peixun,sum(jintie) as jintie,sum(hongbao) as hongbao,sum(fazhan) as fazhan,sum(gaowen) as gaowen,sum(gongshang) as gongshang,sum(shuidian) as shuidian,sum(channengbt) as channengbt,sum(zuidibt) as zuidibt,sum(zhuanghuo) as zhuanghuo,sum(xiehuo) as xiehuo,sum(zahuo) as zahuo,sum(yichang) as yichang,sum(chanlianggongzi) as chanlianggongzi,sum(zhilianggongzi) as zhilianggongzi  From yuangong left join kaoqin ON yuangongID=kaoqin.ygongID left join chanliang ON yuangongID=chanliang.ygongID left join zhiliang ON yuangongID=zhiliang.ygongID  where (1=1) " ;//日期是字符串类型，所以要加引号 
                //$s="and shifouzaizhi='是'and chanliang.riqi between '2015-7-8' and '2015-7-10' group by yuangongID  ORDER BY yuangongID DESC LIMIT $offset, $num"; 
               
                $sql2.=@$rq; 
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$s;
  
                $gongzihuizong=$mydb->getPageRows($sql2);
		if(true) {                           	//如果从数据库中获取到商品记录
			$tpl->assign("tableName", "员工工资汇总表");  //分配页面显示的表面到模板中
			$tpl->assign("url", "gongzihuizong.php");       //分配分页处理文件的URL到模板中
			$tpl->assign("gongzihuizong", $gongzihuizong);    //将在本页显示的所有数据数组分配给模板
			$tpl->assign("pageInfo", $pageInfo);    //将和当前页有关的所有信息数组分配给模板

		}else {                                 	//如果没有获取到任何员工记录
			echo "数据表里没有任何记录!";               //输出一行提示信息
			exit;                              	//并退出程序
		}
	}
	
     $tpl->assign("title","工资汇总");
     $tpl->display("default/gongzihuizong.tpl", $current_page);     //加载输出模板kaoqin.tpl，并指定页面缓存标号
     
?>