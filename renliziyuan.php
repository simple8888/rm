<?php
        error_reporting(0);//避免出现 Notice: Use of undefined constant 
        SESSION_START();
          $_SESSION['ruzhiriqi1']='';
          $_SESSION['ruzhiriqi2']='';
          $_SESSION['number']='';
          $_SESSION['name']='';
          $_SESSION['factory']=''; 
          $_SESSION['zhuchang']=''; 
          $_SESSION['zaizhi']=''; 
  
   	include('common.php');                          //包含Smarty类库所在的文件   
        //include('class/mysqli.inc.php');            	
	require("class/Page.class.php");                //包含分页类Page所在的文件
	require("class/MyDB.class.php");                //包含数据库读取类所在的文件

	

     	/*在GET方法中获取用户提交的页面索引数字。默认第一页，页面索引$current_page值为1*/
	$current_page=isset($_GET['page'])?intval($_GET['page']):1;

     	/* 通过is_cached()方法判断指定的页面是否已经被缓存，如果是则不再执行数据库操作 */
	if(!$tpl->isCached("default/renliziyuan.tpl", $current_page)) {
                if(($ruzhirq1!=null)and($ruzhirq2!=null)){   
                    $rq="and (ruzhiriqi between ('$ruzhirq1') and ('$ruzhirq2')) ";}//日期是字符串类型，所以要加引号
                if($number!=null){
                    $nb="and number=$number ";}
                if($name!=null){
                    $nm="and name='$name' ";}
                if($factory=="luomai"){
                    $ft="and gongzuodidian='罗麦' ";}
                if($factory=="bohan"){
                    $ft="and gongzuodidian='博涵' ";}
                if($zhuchang=="是"){
                    $zc="and yuangong.shifouzhuchang='是' ";}
                if($zhuchang=="否"){
                    $zc="and yuangong.shifouzhuchang='否' ";}
                if($zaizhi=="是"){
                    $zz="and shifouzaizhi='是' ";}
                if($zaizhi=="否"){
                    $zz="and shifouzaizhi='否' ";}
                
                 //echo"$_SESSION[fac]";//从common.php传过来,只显示登录人所在工厂的数据,如果登录人所在工厂为空,显示全部数据
                if(@$_SESSION[fac]!=null){
                  $ft="and yuangong.gongzuodidian='$_SESSION[fac]' and yuangong.shifouzaizhi='是'  ";}

     	        $sql2="SELECT yuangongID,number,name,sex,birthday,age,idno,cell,tel,email,marriage,hometown,livesite,zhiwu,ruzhiriqi,hetongqixian,gongzuodidian,shifouzhuchang,shifouzaizhi,lizhiriqi,feature,memo  FROM yuangong  WHERE(1=1)  ";//日期是字符串类型，所以要加引号 "
                
                $sql2.=@$rq; 
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$zc;
                $sql2.=@$zz;

                $mydb=new MyDBCX();//创建数据库操作类MyDB的对象
               
                $total=$mydb->getRowTotal($sql2);              	//调用MyDB类的方法返回数据表记录总数       
                $fpage=new Page($total,$current_page,20);    	//通过获取的值创建分页类Page的对象		
                $pageInfo=$fpage->getPageInfo();           	//获取和当前页面有关的所有信息数组 
		
         	/* 通过调用MyDB中的方法，获取当前页面所需要的所有记录的数据数组 */
                $offset=$pageInfo["row_offset"];
                $num=$pageInfo["row_num"];

                if(($ruzhirq1!=null)and($ruzhirq2!=null)){   
                    $rq="and (ruzhiriqi between ('$ruzhirq1') and ('$ruzhirq2')) ";}//日期是字符串类型，所以要加引号
                if($number!=null){
                    $nb="and number=$number ";}
                if($name!=null){
                    $nm="and name='$name' ";}
                if($factory=="luomai"){
                    $ft="and gongzuodidian='罗麦' ";}
                if($factory=="bohan"){
                    $ft="and gongzuodidian='博涵' ";}
                if($zhuchang=="是"){
                    $zc="and yuangong.shifouzhuchang='是' ";}
                if($zhuchang=="否"){
                    $zc="and yuangong.shifouzhuchang='否' ";}
                if($zaizhi=="是"){
                    $zz="and shifouzaizhi='是' ";}
                if($zaizhi=="否"){
                    $zz="and shifouzaizhi='否' ";}
               
     	        $sql2="SELECT yuangongID,number,name,sex,birthday,age,idno,cell,tel,email,marriage,hometown,livesite,zhiwu,ruzhiriqi,hetongqixian,gongzuodidian,shifouzhuchang,shifouzaizhi,lizhiriqi,feature,memo  FROM yuangong  WHERE(1=1)  ";//日期是字符串类型，所以要加引号 "
                 
                $s="ORDER BY yuangongID DESC LIMIT $offset, $num";//第一次查询就是为了得到后面这两个数字
                $sql2.=@$rq; 
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$zc;
                $sql2.=@$zz;
                $sql2.=@$s;
  
                $yuangong=$mydb->getPageRows($sql2);
		if($yuangong) {                           	//如果从数据库中获取到商品记录
			$tpl->assign("tableName", "员工基本信息表");  //分配页面显示的表面到模板中
			$tpl->assign("url", "renliziyuan.php");       //分配分页处理文件的URL到模板中
			$tpl->assign("yuangong", $yuangong);    //将在本页显示的所有数据数组分配给模板
			$tpl->assign("pageInfo", $pageInfo);    //将和当前页有关的所有信息数组分配给模板
		}else {                                 	//如果没有获取到任何员工记录
			echo "<center>数据表里没有任何记录!</center>";            //输出一行提示信息
                        echo"<center><input class='button'type='button' value='返回开始输入' onClick=window.location.href='index.php?p=renliziyuanshuru' ></center>";
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

     $tpl->assign("title","人力资源档案");
     $tpl->display("default/renliziyuan.tpl", $current_page);     //加载输出模板renliziyuan.tpl，并指定页面缓存标号

?>