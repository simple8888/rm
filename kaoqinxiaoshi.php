<?php

   	include('common.php');                            //包含Smarty类库所在的文件   
        //include('class/mysqli.inc.php');            	
	require("class/Page.class.php");                  //包含分页类Page所在的文件
	require("class/MyDBCX.class.php");                //包含数据库读取类所在的文件
	

        /*在GET方法中获取用户提交的页面索引数字。默认第一页，页面索引$current_page值为1*/
	$current_page=isset($_GET['page'])?intval($_GET['page']):1;

     	/* 通过is_cached()方法判断指定的页面是否已经被缓存，如果是则不再执行数据库操作 */
	if(!$tpl->isCached("default/kaoqinxiaoshi.tpl", $current_page)) {

                $ft="and (gongchang='罗麦' or gongchang='博涵')";                  
                 //echo"$_SESSION[fac]";//从common.php传过来,只显示登录人所在工厂的数据,如果登录人所在工厂为空,显示全部数据
                if(@$_SESSION[fac]!=null){
                  $ft="and gongchang='$_SESSION[fac]'";} 
               
     	        $sql2="SELECT * from xiaoshi  WHERE(1=1)  ";//日期是字符串类型，所以要加引号 
                $sql2.=@$ft;

                $mydb=new MyDBCX();//创建数据库操作类MyDB的对象
               

                $total=$mydb->getRowTotal($sql2);              	//调用MyDB类的方法返回数据表记录总数       
                $fpage=new Page($total,$current_page,40);    	//通过获取的值创建分页类Page的对象		
                $pageInfo=$fpage->getPageInfo();           	//获取和当前页面有关的所有信息数组 
		
         	/* 通过调用MyDB中的方法，获取当前页面所需要的所有记录的数据数组 */
                $offset=$pageInfo["row_offset"];
                $num=$pageInfo["row_num"];

                $ft="and (gongchang='罗麦' or gongchang='博涵')";                  
                 //echo"$_SESSION[fac]";//从common.php传过来,只显示登录人所在工厂的数据,如果登录人所在工厂为空,显示全部数据
                if(@$_SESSION[fac]!=null){
                  $ft="and gongchang='$_SESSION[fac]'";}               

     	        $sql2="SELECT * from xiaoshi  WHERE(1=1)  ";//日期是字符串类型，所以要加引号  
                $s="order by xiaoshiID DESC"; 
                $sql2.=@$ft;
                $sql2.=@$s;  
 
                $kaoqinxiaoshi=$mydb->getPageRows($sql2);
		if(1) {                           	//如果从数据库中获取到商品记录
			$tpl->assign("tableName", "最低工资标准表");  //分配页面显示的表面到模板中
			$tpl->assign("url", "kaoqinxiaoshi.php");       //分配分页处理文件的URL到模板中
			$tpl->assign("kaoqinxiaoshi", $kaoqinxiaoshi);    //将在本页显示的所有数据数组分配给模板
			$tpl->assign("pageInfo", $pageInfo);    //将和当前页有关的所有信息数组分配给模板
		}else {                                 	//如果没有获取到任何员工记录
			echo "数据表里没有任何记录!";               //输出一行提示信息
			exit;                              	//并退出程序
		}
	}
     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 	
     $tpl->assign("title","最低工资标准表");
     $tpl->display("default/kaoqinxiaoshi.tpl", $current_page);     //加载输出模板kaoqinxiaoshi.tpl，并指定页面缓存标号
     
?>