<?php
          @SESSION_START();
          $_SESSION['number']='';
          $_SESSION['name']='';
          $_SESSION['factory']='';
          $_SESSION['xianzhong']=''; 

   	include('common.php');                            //包含Smarty类库所在的文件   
        //include('class/mysqli.inc.php');            	
	require("class/Page.class.php");                  //包含分页类Page所在的文件
	require("class/MyDBCX.class.php");                //包含数据库读取类所在的文件
	
        @$number=$_GET['number'];
        @$name=$_GET['name'];
        @$factory=$_GET['factory'];
        @$xianzhong=$_GET['xianzhong'];

        /*在GET方法中获取用户提交的页面索引数字。默认第一页，页面索引$current_page值为1*/
	$current_page=isset($_GET['page'])?intval($_GET['page']):1;

     	/* 通过is_cached()方法判断指定的页面是否已经被缓存，如果是则不再执行数据库操作 */
	if(!$tpl->isCached("default/zhilianggongzi.tpl", $current_page)) {


                if($number!=null){
                    $nb="and yuangong.number=$number ";}
                if($name!=null){
                    $nm="and yuangong.name='$name' ";}
                if($factory=="luomai"){
                    $ft="and yuangong.gongzuodidian='罗麦' ";}
                if($factory=="bohan"){
                    $ft="and yuangong.gongzuodidian='博涵' ";}
                if($xianzhong=="三险"){
                    $xz="and shebao.xianzhong='三险' ";}
                if($xianzhong=="五险"){
                    $xz="and shebao.xianzhong='五险' ";}

                 //echo"$_SESSION[fac]";//从common.php传过来,只显示登录人所在工厂的数据,如果登录人所在工厂为空,显示全部数据
                if(@$_SESSION[fac]!=null){
                  $ft="and yuangong.gongzuodidian='$_SESSION[fac]' and yuangong.shifouzaizhi='是'  ";}  
                
     	        $sql2="SELECT yuangong.yuangongID,shebao.shebaoID,shebao.ygongID,yuangong.number,yuangong.name,shebao.jishu,shebao.bili,shebao.xianzhong,shebao.shebao,shebao.beizhu FROM yuangong left join shebao ON yuangong.yuangongID=shebao.ygongID  WHERE(1=1)  ";//日期是字符串类型，所以要加引号 
                $s="and yuangong.shifouzaizhi='是'"; 
                
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$xz;
                $sql2.=@$s;

                $mydb=new MyDBCX();//创建数据库操作类MyDB的对象
               

                $total=$mydb->getRowTotal($sql2);              	//调用MyDB类的方法返回数据表记录总数       
                $fpage=new Page($total,$current_page,40);    	//通过获取的值创建分页类Page的对象		
                $pageInfo=$fpage->getPageInfo();           	//获取和当前页面有关的所有信息数组 
		
         	/* 通过调用MyDB中的方法，获取当前页面所需要的所有记录的数据数组 */
                $offset=$pageInfo["row_offset"];
                $num=$pageInfo["row_num"];


                if($number!=null){
                    $nb="and yuangong.number=$number ";}
                if($name!=null){
                    $nm="and yuangong.name='$name' ";}
                if($factory=="luomai"){
                    $ft="and yuangong.gongzuodidian='罗麦' ";}
                if($factory=="bohan"){
                    $ft="and yuangong.gongzuodidian='博涵' ";}
                if($xianzhong=="三险"){
                    $xz="and shebao.xianzhong='三险' ";}
                if($xianzhong=="五险"){
                    $xz="and shebao.xianzhong='五险' ";}
               
     	        $sql2="SELECT yuangong.yuangongID,shebao.shebaoID,shebao.ygongID,yuangong.number,yuangong.name,shebao.jishu,shebao.bili,shebao.xianzhong,shebao.shebao,shebao.beizhu FROM yuangong left join shebao ON yuangong.yuangongID=shebao.ygongID  WHERE(1=1)  ";//日期是字符串类型，所以要加引号 
                 
                $s="and yuangong.shifouzaizhi='是' ORDER BY yuangong.yuangongID DESC, shebao.ygongID DESC  LIMIT $offset, $num";
                $sql2.=@$nb; 
                $sql2.=@$nm; 
                $sql2.=@$ft;
                $sql2.=@$xz;
                $sql2.=@$s;
 
                $kaoqinshebao=$mydb->getPageRows($sql2);
		if($kaoqinshebao) {                           	//如果从数据库中获取到商品记录
			$tpl->assign("tableName", "员工社会保险信息表");  //分配页面显示的表面到模板中
			$tpl->assign("url", "kaoqinshebao.php");       //分配分页处理文件的URL到模板中
			$tpl->assign("kaoqinshebao", $kaoqinshebao);    //将在本页显示的所有数据数组分配给模板
			$tpl->assign("pageInfo", $pageInfo);    //将和当前页有关的所有信息数组分配给模板
		}else {                                 	//如果没有获取到任何员工记录
			echo "数据表里没有任何记录!";               //输出一行提示信息
			exit;                              	//并退出程序
		}
	}
     $tpl->assign("biaoti","信息发布栏");
     $tpl->assign("pandianzhouqifabu",@$ar); 	
     $tpl->assign("title","社会保险");
     $tpl->display("default/kaoqinshebao.tpl", $current_page);     //加载输出模板kaoqin.tpl，并指定页面缓存标号
     
?>