<?php /* Smarty version 3.1.24, created on 2015-09-02 16:18:16
         compiled from "templates/default/header.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3068055e6b0c884ecb9_90287124%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c8e1fbc60b5c02d367f2e6bff0db8a838385a4' => 
    array (
      0 => 'templates/default/header.inc.tpl',
      1 => 1438347427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3068055e6b0c884ecb9_90287124',
  'variables' => 
  array (
    'title' => 0,
    'fac' => 0,
    'bumen' => 0,
    'nam' => 0,
    'biaoti' => 0,
    'pandianzhouqifabu' => 0,
    'maohao' => 0,
    'zhi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b0c886e0b1_98391598',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b0c886e0b1_98391598')) {
function content_55e6b0c886e0b1_98391598 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3068055e6b0c884ecb9_90287124';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="jy" /> <!--SEO搜索引擎优化用，可以添加多个-->
<meta name="Keywords" content="php,lamp" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" /><!--图标放在web根目录下，命名为favicon.ico-->
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="style/default/css/style.css" />
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="style/default/javascript/kaoqinpiliang.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="datepicker/WdatePicker.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<div style="float:right;"><?php echo $_smarty_tpl->tpl_vars['fac']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['bumen']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nam']->value;?>
, 欢迎你！点击此处 <a href="logout.php">注销</a> 登录!</div>
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
         <li style="font-size:12px;line-height:1.6em;"><strong style="letter-spacing:6px;"><?php echo $_smarty_tpl->tpl_vars['biaoti']->value;?>
</strong><br /><img src="./images/hehua.jpg" title="荷花" /><hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" /><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pandianzhouqifabu']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total']);
?>
<?php echo $_smarty_tpl->tpl_vars['pandianzhouqifabu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongchang'];
echo $_smarty_tpl->tpl_vars['pandianzhouqifabu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['pandianyuefen'];
echo $_smarty_tpl->tpl_vars['maohao']->value;
echo $_smarty_tpl->tpl_vars['pandianzhouqifabu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['qishiriqi'];
echo $_smarty_tpl->tpl_vars['zhi']->value;
echo $_smarty_tpl->tpl_vars['pandianzhouqifabu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhongzhiriqi'];?>
<hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" />
<?php endfor; else: ?>
<?php endif; ?></li>   
      </ul>
    </div>
<div id="content"><?php }
}
?>