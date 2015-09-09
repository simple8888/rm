<?php /* Smarty version 3.1.24, created on 2015-08-01 14:47:30
         compiled from "D:/Apache24/htdocs/rm/templates/admin/header.admin.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:110355bc6b826e79d0_17904693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82974184212a4dbb6b71e09e9e64f0bed4afddeb' => 
    array (
      0 => 'D:/Apache24/htdocs/rm/templates/admin/header.admin.inc.tpl',
      1 => 1438411636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110355bc6b826e79d0_17904693',
  'variables' => 
  array (
    'title' => 0,
    'fa' => 0,
    'bume' => 0,
    'na' => 0,
    'biaoti' => 0,
    'rolen' => 0,
    'maohao' => 0,
    'rolec' => 0,
    'rolex' => 0,
    'rol' => 0,
    'permissionn' => 0,
    'permissionc' => 0,
    'permissionx' => 0,
    'per' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55bc6b827ca316_65072468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bc6b827ca316_65072468')) {
function content_55bc6b827ca316_65072468 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '110355bc6b826e79d0_17904693';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="jy" /> <!--SEO搜索引擎优化用，可以添加多个-->
<meta name="Keywords" content="php,lamp" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" /><!--图标放在web根目录下，命名为favicon.ico-->
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../style/default/css/style.css" />
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="style/default/javascript/kaoqinpiliang.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="datepicker/WdatePicker.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<div style="float:right;"><?php echo $_smarty_tpl->tpl_vars['fa']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['bume']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['na']->value;?>
, 欢迎你！点击此处 <a href="logout.php">注销</a> 登录!</div>
</head>
<body>
<div id="container">
    <div id="header"> 
      <h1>上海罗麦<img style="vertical-align:middle;" src="../images/dian.png" />苏州博涵家居用品有限公司后台管理<h1>
         <p>信息化管理系统<small>REV:1.0</small></p>
    </div>

    <div id="navigation">
      <ul id="navlist">
         <li><a href="index.php?p=main">后台首页</a></li>
         <li><a href="index.php?p=user">用户表</a></li>
         <li><a href="index.php?p=role">角色表</a></li>
         <li><a href="index.php?p=permission">权限表</a></li> 
         <li><a href="index.php?p=contact">联系我们</a></li>
         <li><a href="index.php?p=admin">后台管理员表</a></li>  
                                                                                            
         <li style="font-size:12px;line-height:1.4em;"><strong style="letter-spacing:5px;"><?php if ((!isset($_smarty_tpl->tpl_vars['biaoti']->value))) {?> <?php echo "信息发布栏";?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['biaoti']->value;?>
 <?php }?></strong><br /><img src="../images/hehua.jpg" title="荷花" /><hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" /><b><?php if ((!isset($_smarty_tpl->tpl_vars['rolen']->value))) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['rolen']->value;?>
 <?php }?> <?php if ((!isset($_smarty_tpl->tpl_vars['maohao']->value))) {?> <?php echo null;?>
 <?php } else {
echo $_smarty_tpl->tpl_vars['maohao']->value;
}?> <?php if ((!isset($_smarty_tpl->tpl_vars['rolec']->value))) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['rolec']->value;?>
 <?php }?> </b><hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" /><?php if ((!isset($_smarty_tpl->tpl_vars['rolex']->value))) {?> <?php $_smarty_tpl->tpl_vars['rol'] = new Smarty_Variable(null, null, 0);?> <?php } else { ?> <?php $_smarty_tpl->tpl_vars['rol'] = new Smarty_Variable($_smarty_tpl->tpl_vars['rolex']->value, null, 0);?> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rol']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<?php echo $_smarty_tpl->tpl_vars['rolex']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['rolename'];?>
 <?php if ((!isset($_smarty_tpl->tpl_vars['maohao']->value))) {?> <?php echo null;?>
 <?php } else {
echo $_smarty_tpl->tpl_vars['maohao']->value;
}?> <?php echo $_smarty_tpl->tpl_vars['rolex']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['rolecode'];?>
<hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" />
<?php endfor; else: ?>
<?php endif; ?></li> 
         <li style="font-size:12px;line-height:1.4em;"><b><?php if ((!isset($_smarty_tpl->tpl_vars['permissionn']->value))) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['permissionn']->value;?>
 <?php }?> <?php if ((!isset($_smarty_tpl->tpl_vars['maohao']->value))) {?> <?php echo null;?>
 <?php } else {
echo $_smarty_tpl->tpl_vars['maohao']->value;
}?> <?php if ((!isset($_smarty_tpl->tpl_vars['permissionc']->value))) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['permissionc']->value;?>
 <?php }?></b><hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" /><?php if ((!isset($_smarty_tpl->tpl_vars['permissionx']->value))) {?> <?php $_smarty_tpl->tpl_vars['per'] = new Smarty_Variable(null, null, 0);?> <?php } else { ?> <?php $_smarty_tpl->tpl_vars['per'] = new Smarty_Variable($_smarty_tpl->tpl_vars['permissionx']->value, null, 0);?> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['per']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<?php echo $_smarty_tpl->tpl_vars['permissionx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['permissionname'];?>
 <?php if ((!isset($_smarty_tpl->tpl_vars['maohao']->value))) {?> <?php echo null;?>
 <?php } else {
echo $_smarty_tpl->tpl_vars['maohao']->value;
}?> <?php echo $_smarty_tpl->tpl_vars['permissionx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['permissioncode'];?>
<hr style="height:0px;border:none;border-top:1px solid #d7e6e9;" />
<?php endfor; else: ?>
<?php endif; ?></li>    
      </ul>
    </div>
<div id="content"><?php }
}
?>