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

          $pandianzhouqi2=$pandianzhouqi.工资汇总表;//用作导出的excel表的文件名
           
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
  
                
	}//不加这个大括号显示语法错误
   
        require_once './phpexcel/PHPExcel.php';  //路径根据自己实际项目的路径进行设置
       $objPHPExcel = new PHPExcel();  //创建PHPExcel实例
       //下面是对mysql数据库的连接
       require('mysqli.inc.php');//数据库连接 
       
 $result = $mysqli->query($sql2);    //查询sql语句
/*--------------设置表头信息------------------*/
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A2', '工号')
            ->setCellValue('B2', '姓名')
            ->setCellValue('C2', '日期')
            ->setCellValue('D2', '法定出勤')
            ->setCellValue('E2', '法定加班')
	    ->setCellValue('f2', '周末加班')
	    ->setCellValue('g2', '国定待薪')
            ->setCellValue('h2', '婚假')
            ->setCellValue('i2', '产假')
            ->setCellValue('j2', '丧假')
            ->setCellValue('k2', '病假')
            ->setCellValue('l2', '平时请假')
            ->setCellValue('m2', '周末请假')
            ->setCellValue('n2', '全勤')
            ->setCellValue('o2', '递增')
            ->setCellValue('p2', '培训补贴')
            ->setCellValue('q2', '岗位津贴')
            ->setCellValue('r2', '生日红包')
            ->setCellValue('s2', '发展奖')
            ->setCellValue('t2', '高温费')
            ->setCellValue('u2', '工伤')
            ->setCellValue('v2', '水电费')
            ->setCellValue('w2', '产能补贴')
            ->setCellValue('x2', '小时最低工资补贴')
            ->setCellValue('y2', '装货')
            ->setCellValue('z2', '卸货')
            ->setCellValue('aa2', '杂活')
            ->setCellValue('ab2', '异常')
            ->setCellValue('ac2', '产量工资')
            ->setCellValue('ad2', '质量工资')
            ->setCellValue('ae2', '应发工资')
            ->setCellValue('af2', '社保')
            ->setCellValue('ag2', '个税')
            ->setCellValue('ah2', '实发工资');


/*--------------开始从数据库提取信息插入Excel表中------------------*/
$i=3;                //定义一个i变量，目的是在循环输出数据是控制行数
 while($rs=$result->fetch_array()){

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue("A".$i, $rs[0])
            ->setCellValue("B".$i, $rs[1])
            ->setCellValue("C".$i, $pdzq)
            ->setCellValue("D".$i, $rs[3])
            ->setCellValue("E".$i, $rs[4])
	    ->setCellValue("f".$i, $rs[5])
            ->setCellValue("g".$i, $rs[6])
            ->setCellValue("h".$i, $rs[7])
            ->setCellValue("i".$i, $rs[8])
            ->setCellValue("j".$i, $rs[9])
            ->setCellValue("k".$i, $rs[10])
            ->setCellValue("l".$i, $rs[11])
            ->setCellValue("m".$i, $rs[12])
            ->setCellValue("n".$i, $rs[13])
            ->setCellValue("o".$i, $rs[14])
            ->setCellValue("p".$i, $rs[15])
            ->setCellValue("q".$i, $rs[16])
            ->setCellValue("r".$i, $rs[17])
            ->setCellValue("s".$i, $rs[18])
            ->setCellValue("t".$i, $rs[19])
            ->setCellValue("u".$i, $rs[20])
            ->setCellValue("v".$i, $rs[21])
            ->setCellValue("w".$i, $rs[22])
            ->setCellValue("x".$i, $rs[23])
            ->setCellValue("y".$i, $rs[24])
            ->setCellValue("z".$i, $rs[25])
            ->setCellValue("aa".$i, $rs[26])
            ->setCellValue("ab".$i, $rs[27])
            ->setCellValue("ac".$i, $rs[28])
            ->setCellValue("ad".$i, $rs[29])
            ->setCellValue("ae".$i, $rs[30])
            ->setCellValue("af".$i, $rs[31])
            ->setCellValue("ag".$i, $rs[32])
            ->setCellValue("ah".$i, $rs[33]);        
            $i++;
 }
/*--------------下面是设置其他信息------------------*/
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle($pandianzhouqi.'工资汇总表');//表名


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
ob_end_clean();//清除缓冲区,避免乱码
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment;filename=$pandianzhouqi2.xlsx");//文件名
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;

?>