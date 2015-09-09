﻿<?php
  
   	include('common.php');                          //包含Smarty类库所在的文件   
        //include('class/mysqli.inc.php');            	
	require("class/Page.class.php");                //包含分页类Page所在的文件
	require("class/MyDB.class.php");                //包含数据库读取类所在的文件
	

     	/*在GET方法中获取用户提交的页面索引数字。默认第一页，页面索引$current_page值为1*/
	$current_page=isset($_GET['page'])?intval($_GET['page']):1;

     	/* 通过is_cached()方法判断指定的页面是否已经被缓存，如果是则不再执行数据库操作 */
	if(!$tpl->isCached("default/kaoqin.tpl", $current_page)) {
		$mydb=new MyDBKQ();                     	//创建数据库操作类MyDB的对象
		$total=$mydb->getRowTotal();              	//调用MyDB类的方法返回数据表记录总数
		$fpage=new Page($total,$current_page, 10);    	//通过获取的值创建分页类Page的对象
		$pageInfo=$fpage->getPageInfo();           	//获取和当前页面有关的所有信息数组
         	/* 通过调用MyDB中的方法，获取当前页面所需要的所有记录的数据数组 */
		$yuangong=$mydb->getPageRows($pageInfo["row_offset"], $pageInfo["row_num"]);
		if($yuangong) {                           	//如果从数据库中获取到商品记录
			$tpl->assign("tableName", "员工考勤&请假休假&福利&代扣款信息表");  //分配页面显示的表面到模板中
			$tpl->assign("url", "kaoqin.php");       //分配分页处理文件的URL到模板中
			$tpl->assign("yuangong", $yuangong);    //将在本页显示的所有数据数组分配给模板
			$tpl->assign("pageInfo", $pageInfo);    //将和当前页有关的所有信息数组分配给模板
		}else {                                 	//如果没有获取到任何员工记录
			echo "<center>数据表里没有任何记录!</center>";            //输出一行提示信息
                        echo"<center><input class='button'type='button' value='返回开始输入' onClick=window.location.href='index.php?p=renliziyuanshuru' ></center>";
			exit;                              	//并退出程序
		}
	}
	
     $tpl->assign("title","考勤&请假休假&福利&代扣款");
     $tpl->display("default/kaoqin.tpl", $current_page);     //加载输出模板kaoqin.tpl，并指定页面缓存标号

?>