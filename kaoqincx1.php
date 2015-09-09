<?php
        SESSION_START();
        if(@$_GET['clearsession']){
          $_SESSION['name']='';}
   	include('common.php');                            //包含Smarty类库所在的文件   
        //include('class/mysqli.inc.php');            	
	require("class/Page.class.php");                  //包含分页类Page所在的文件
	require("class/MyDBKQ.class.php");                //包含数据库读取类所在的文件
           




         @$qishirq=$_GET['qishiriqi'];
         @$zhongzhirq=$_GET['zhongzhiriqi'];
         @$number=$_GET['number'];
         @$nm=$_GET['name'];
         @$factory=$_GET['factory'];


if($nm!=null){
          $_SESSION['name']=$nm;}


$name=$_SESSION['name'];



        /*在GET方法中获取用户提交的页面索引数字。默认第一页，页面索引$current_page值为1*/
	$current_page=isset($_GET['page'])?intval($_GET['page']):1;

     	/* 通过is_cached()方法判断指定的页面是否已经被缓存，如果是则不再执行数据库操作 */
	if(!$tpl->isCached("default/kaoqincx.tpl", $current_page)) {


                if(($qishirq!=null)and($zhongzhirq!=null)){   
                    $rq="and ((kaoqin.riqi between ('$qishirq') and ('$zhongzhirq'))  or kaoqin.riqi is null) ";}
                if($number!=null){
                    $nb="and yuangong.number=$number ";}
                if($name!=null){
                    $nm="and yuangong.name='$name' ";}
                if($factory=="luomai"){
                    $ft="and yuangong.gongzuodidian='罗麦' ";}
                if($factory=="bohan"){
                    $ft="and yuangong.gongzuodidian='博涵' ";}
                
     	        $sql2="SELECT yuangong.yuangongID,kaoqin.kaoqinID,kaoqin.ygongID,yuangong.number,yuangong.name,kaoqin.riqi,kaoqin.fadingcq,kaoqin.fadingjb,kaoqin.zhoumojb,kaoqin.guodingdx,kaoqin.hunjia,kaoqin.chanjia,kaoqin.sangjia,kaoqin.bingjia,kaoqin.pingshiqj,kaoqin.zhoumoqj,kaoqin.quanqin,kaoqin.dizeng,kaoqin.peixun,kaoqin.jintie,kaoqin.hongbao,kaoqin.fazhan,kaoqin.gaowen,kaoqin.gongshang,kaoqin.shuidian FROM yuangong left join kaoqin ON yuangong.yuangongID=kaoqin.ygongID  WHERE(1=1)  ";//日期是字符串类型，所以要加引号 ";//日期是字符串类型，所以要加引号
                $s="and yuangong.shifouzaizhi='是'"; 
                
                $sql2.=@$rq; 
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$s;

                $mydb=new MyDBKQCX();//创建数据库操作类MyDB的对象
               
                $total=$mydb->getRowTotal($sql2);              	//调用MyDB类的方法返回数据表记录总数       
                $fpage=new Page($total,$current_page, 5);    	//通过获取的值创建分页类Page的对象		
                $pageInfo=$fpage->getPageInfo();           	//获取和当前页面有关的所有信息数组 
		
         	/* 通过调用MyDB中的方法，获取当前页面所需要的所有记录的数据数组 */
                $offset=$pageInfo["row_offset"];
                $num=$pageInfo["row_num"];

                if(($qishirq!=null)and($zhongzhirq!=null)){   
                    $rq="and ((kaoqin.riqi between ('$qishirq') and ('$zhongzhirq'))  or kaoqin.riqi is null) and yuangong.shifouzaizhi='是'  ";}
                if($number!=null){
                    $nb="and yuangong.number=$number and yuangong.shifouzaizhi='是'  ";}
                if($name!=null){
                    $nm="and yuangong.name='$name' and yuangong.shifouzaizhi='是'  ";}
                if($factory=="luomai"){
                    $ft="and yuangong.gongzuodidian='罗麦' and yuangong.shifouzaizhi='是'  ";}
                if($factory=="bohan"){
                    $ft="and yuangong.gongzuodidian='博涵' and yuangong.shifouzaizhi='是'  ";}
               
     	        $sql2="SELECT yuangong.yuangongID,kaoqin.kaoqinID,kaoqin.ygongID,yuangong.number,yuangong.name,kaoqin.riqi,kaoqin.fadingcq,kaoqin.fadingjb,kaoqin.zhoumojb,kaoqin.guodingdx,kaoqin.hunjia,kaoqin.chanjia,kaoqin.sangjia,kaoqin.bingjia,kaoqin.pingshiqj,kaoqin.zhoumoqj,kaoqin.quanqin,kaoqin.dizeng,kaoqin.peixun,kaoqin.jintie,kaoqin.hongbao,kaoqin.fazhan,kaoqin.gaowen,kaoqin.gongshang,kaoqin.shuidian FROM yuangong left join kaoqin ON yuangong.yuangongID=kaoqin.ygongID  WHERE(1=1)  ";//日期是字符串类型，所以要加引号
                 
                $s="and yuangong.shifouzaizhi='是' ORDER BY kaoqin.ygongID DESC,kaoqin.riqi DESC LIMIT $offset, $num";
                $sql2.=@$rq; 
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$s;
                  //"SELECT yuangong.yuangongID,kaoqin.kaoqinID,kaoqin.ygongID,yuangong.number,yuangong.name,kaoqin.riqi,kaoqin.fadingcq,kaoqin.fadingjb,kaoqin.zhoumojb,kaoqin.guodingdx,kaoqin.hunjia,kaoqin.chanjia,kaoqin.sangjia,kaoqin.bingjia,kaoqin.pingshiqj,kaoqin.zhoumoqj,kaoqin.quanqin,kaoqin.dizeng,kaoqin.peixun,kaoqin.jintie,kaoqin.hongbao,kaoqin.fazhan,kaoqin.gaowen,kaoqin.gongshang,kaoqin.shuidian FROM yuangong left join kaoqin ON yuangong.yuangongID=kaoqin.ygongID  WHERE(1=1)  ";//日期是字符串类型，所以要加引号
                 //and yuangong.shifouzaizhi='是'  ORDER BY kaoqin.yuangongID DESC,kaoqin.riqi DESC LIMIT $offset, $num
  
                $kaoqincx=$mydb->getPageRows($sql2);
		if($kaoqincx) {                           	//如果从数据库中获取到商品记录
			$tpl->assign("tableName", "员工考勤&请假休假&福利&代扣款信息表");  //分配页面显示的表面到模板中
			$tpl->assign("url", "kaoqincx.php");       //分配分页处理文件的URL到模板中
			$tpl->assign("kaoqincx", $kaoqincx);    //将在本页显示的所有数据数组分配给模板
			$tpl->assign("pageInfo", $pageInfo);    //将和当前页有关的所有信息数组分配给模板

                        }else {                                 	//如果没有获取到任何员工记录
			echo "考勤信息读取失败!查无此人。";               //输出一行提示信息
			exit;                              	//并退出程序
		}
	}
	
     $tpl->assign("title","考勤&请假休假&福利&代扣款");
     $tpl->display("default/kaoqincx.tpl", $current_page);     //加载输出模板kaoqin.tpl，并指定页面缓存标号
     
?>