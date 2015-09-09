<?php /* Smarty version 3.1.24, created on 2015-09-02 16:53:30
         compiled from "templates/default/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1040255e6b90af2c637_20837483%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aecfd7dc4a037f7c3bfb1c8708c45064d2dfe89' => 
    array (
      0 => 'templates/default/login.tpl',
      1 => 1438218919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1040255e6b90af2c637_20837483',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b90b076c55_39259881',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b90b076c55_39259881')) {
function content_55e6b90b076c55_39259881 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1040255e6b90af2c637_20837483';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>    
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

<style type="text/css">
	#td{ text-align:center;font-style:normal;}
	#t{ text-align:center;background-color:#ffffff;width:100%; height:120px;border-style:solid;border-width:1px;border-color:red;position:absolute;z-index:1;}
        #im{ border:0px; margin:0; padding:0; height:100%; }
</style>	
</head>
<body style="overflow-x:hidden;"><!--去掉水平滚动条-->

<!--下面是工厂大门自动弹出代码-->
<!-- <div id="t">公告<br/>公告内容</div>  -->
<SCRIPT>
setTimeout("document.all.yaf2000.style.display = 'block'","300");//&#x9875;&#x9762;&#x52a0;&#x8f7d;&#x540e;&#x51fa;&#x73b0;&#x7684;&#x65f6;&#x95f4;
setTimeout("document.all.yaf2000.style.display = 'none'","5000");//&#x663e;&#x793a;&#x65f6;&#x95f4;&#x957f;&#x5ea6;
document.write ('<TABLE WIDTH="1020" BORDER="0" CELLSPACING="0" CELLPADDING="0" ALIGN="center">');
document.write ('<TR><TD><DIV ID=yaf2000 STYLE="display: none;"><a href="http://www.163.com" target="_blank"><img src="dm.jpg" style="margin:50 auto;width:1020;text-align: center;position:absolute;z-index:-5;border:0px #000000 solid;"></a>');
document.write (' </DIV><TD></TR></TABLE>');
</SCRIPT>
<!--自动弹出代码结束-->
  
<!--下面是向左滚动代码-->
<div id="butong_net_left" style="overflow:hidden;width:100%;position:absolute;z-index:-10">
<table style="height:100%; margin:0;" cellpadding="0" cellspacing="0" border="0">
<tr><td id="butong_net_left1" valign="top" align="center">
<table cellpadding="0" cellspacing="0" border="0">
<tr align="center" >

<td><img id="im" src="1.jpg"></td>
<td><img id="im" src="2.jpg"></td>
<td><img id="im" src="3.jpg"></td>
<td><img id="im" src="4.jpg"></td>

</tr>
</table>
</td>
<td id="butong_net_left2" valign="top"></td>
</tr>
</table>
</div>
<?php echo '<script'; ?>
>
var speed=30//速度数值越大速度越慢
butong_net_left2.innerHTML=butong_net_left1.innerHTML
function Marquee3(){
if(butong_net_left2.offsetWidth-butong_net_left.scrollLeft<=0)
butong_net_left.scrollLeft-=butong_net_left1.offsetWidth
else{
butong_net_left.scrollLeft++
}
}
var MyMar3=setInterval(Marquee3,speed)
butong_net_left.onmouseover=function(){ clearInterval(MyMar3)}
butong_net_left.onmouseout=function(){ MyMar3=setInterval(Marquee3,speed)}
<?php echo '</script'; ?>
>
<!--向左滚动代码结束-->

      <div style="margin-top:180px;color:#F79b06;font-size:44px;font-family:隶书;text-align:center;">上海罗麦苏州博涵家居用品有限公司<br/>企业信息管理系统<small>EIMS</small></div>
      <form style="margin-top:300px;text-align:center;" action="logincheck.php" method="POST" ><br/><br/><br/>
      
      <img style="vertical-align:middle;" src="images/username.png" />:<input type="text" name="username"  size:150 ><br>
      <img style="vertical-align:middle;" src="images/password.png" />:<input style="margin-top:4px;" type="password" name="password" size:150><br>
  <center>
      <input type="submit" name="submit" value="登录" style="margin-top:6px;margin-left:66px;" />  
      <input type="reset" value="重置" style="" /><br /><br />
<div>提示:请使用谷歌浏览器登录本系统!</div>
  </center>     
      </form>
<div style="margin-top:40px;">
<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div>
  </body>
</html>
<?php }
}
?>