<?php
          @SESSION_START();
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

        /*在GET方法中获取用户提交的页面索引数字。默认第一页，页面索引$current_page值为1*/
	$current_page=isset($_GET['page'])?intval($_GET['page']):1;

     	/* 通过is_cached()方法判断指定的页面是否已经被缓存，如果是则不再执行数据库操作 */
	if(!$tpl->isCached("default/zhilianggongzi.tpl", $current_page)) {


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

                 //echo"$_SESSION[fac]";//从common.php传过来,只显示登录人所在工厂的数据,如果登录人所在工厂为空,显示全部数据
                if(@$_SESSION[fac]!=null){
                  $ft="and yuangong.gongzuodidian='$_SESSION[fac]' and yuangong.shifouzaizhi='是'  ";}
                
     	        $sql2="SELECT yuangong.yuangongID,zhiliang.zhiliangID,zhiliang.ygongID,yuangong.number,yuangong.name,zhiliang.riqi,zhiliang.zhiliangjl,zhiliang.zhiliangkk,zhiliang.zhilianggongzi FROM yuangong left join zhiliang ON yuangong.yuangongID=zhiliang.ygongID  WHERE(1=1)  ";//日期是字符串类型，所以要加引号 
                $s="and yuangong.shifouzaizhi='是'"; 
                
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
               
     	        $sql2="SELECT yuangong.yuangongID,zhiliang.zhiliangID,zhiliang.ygongID,yuangong.number,yuangong.name,zhiliang.riqi,zhiliang.zhiliangjl,zhiliang.zhiliangkk,zhiliang.zhilianggongzi FROM yuangong left join zhiliang ON yuangong.yuangongID=zhiliang.ygongID  WHERE(1=1)  ";//日期是字符串类型，所以要加引号 
                 
                $s="and yuangong.shifouzaizhi='是' ORDER BY zhiliang.ygongID DESC,zhiliang.riqi DESC LIMIT $offset, $num";//空表必须按yuangongID排序后才能批量插入  
                $sql2.=@$rq; 
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$s;
 
       
  
                $zhilianggongzi=$mydb->getPageRows($sql2);
		if($zhilianggongzi) {                           	//如果从数据库中获取到商品记录
			$tpl->assign("tableName", "员工质量工资信息表");  //分配页面显示的表面到模板中
			$tpl->assign("url", "zhilianggongzi.php");       //分配分页处理文件的URL到模板中
			$tpl->assign("zhilianggongzi", $zhilianggongzi);    //将在本页显示的所有数据数组分配给模板
			$tpl->assign("pageInfo", $pageInfo);    //将和当前页有关的所有信息数组分配给模板
		}else {                                 	//如果没有获取到任何员工记录
			echo "数据表里没有任何记录!";               //输出一行提示信息
			exit;                              	//并退出程序
		}
	}
     //为了在盘点周期发布栏里输出zhouqi表里的盘点月份
     require('mysqli.inc.php');//数据库连接 
     @$result=$mysqli->query("SELECT * FROM zhouqi order by zhouqiID DESC limit 5");
     $arr=array();
     while($row=$result->fetch_assoc()){
           $arr[]=$row;}
     $result->close();
     $mysqli->close();
     $tpl->assign("biaoti","盘点周期发布栏");
     $tpl->assign("pandianzhouqifabu",@$arr);
     $tpl->assign("maohao",":");
     $tpl->assign("zhi","至");
 	
     $tpl->assign("title","质量工资");
     $tpl->display("default/zhilianggongzi.tpl", $current_page);     //加载输出模板kaoqin.tpl，并指定页面缓存标号
     
?>