<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="jy" /> <!--SEO搜索引擎优化用，可以添加多个-->
<meta name="Keywords" content="php,lamp" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" /><!--图标放在web根目录下，命名为favicon.ico-->
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="style/default/css/style.css" />
<script language="javascript" type="text/javascript" src="style/default/javascript/kaoqinpiliang.js"></script>
<script language="javascript" type="text/javascript" src="datepicker/WdatePicker.js"></script>
<title>{$title}</title>
<div style="float:right;">{$fac} {$bumen} {$nam}, 欢迎你！点击此处 <a href="logout.php">注销</a> 登录!</div>
</head>
<body>
<div id="container">
    <div id="header"> 
      <h1>上海罗麦<img style="vertical-align:middle;" src="images/dian.png" />苏州博涵家居用品有限公司<h1>
         <p>信息化管理系统<small>REV:1.0</small></p>
    </div>

    <div id="navigation">
      <ul id="navlist">
         <li><a href="index.php?p=main">系统首页</a></li>
         <li><a href="index.php?p=salary">工资核算</a></li>
         <li><a href="index.php?p=this">待定1</a></li> 
         <li><a href="index.php?p=that">待定2</a></li>
         <li><a href="index.php?p=contact">联系我们</a></li>
         <li style="font-size:12px;line-height:1.6em;"><strong style="letter-spacing:6px;">{$biaoti}</strong><br /><img src="./images/hehua.jpg" title="荷花" /><hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" />{section name=record loop=$pandianzhouqifabu}
{$pandianzhouqifabu[record].gongchang}{$pandianzhouqifabu[record].pandianyuefen}{$maohao}{$pandianzhouqifabu[record].qishiriqi}{$zhi}{$pandianzhouqifabu[record].zhongzhiriqi}<hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" />
{sectionelse}
{/section}</li>   
      </ul>
    </div>
<div id="content">