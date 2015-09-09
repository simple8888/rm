<?php /* Smarty version 3.1.24, created on 2015-09-02 16:18:16
         compiled from "templates/default/salary.header.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:184155e6b0c88ac8c8_10324002%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce798daaa85672dedb6001e1470aeccf4af0f130' => 
    array (
      0 => 'templates/default/salary.header.inc.tpl',
      1 => 1434096652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184155e6b0c88ac8c8_10324002',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b0c88e33d6_16003945',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b0c88e33d6_16003945')) {
function content_55e6b0c88e33d6_16003945 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '184155e6b0c88ac8c8_10324002';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<style>
.li{list-style-type:none;margin:15px;float:left;}
</style>
<head>
<body>
<h2>工资核算</h2>
<p style="
padding: 2px;margin-top:-10px;"></p>
   <div style="margin-top:-15px;">
     <ul style="display:block;">
         <li class = "li"><a href="index.php?p=renliziyuan">人力资源档案</a></li>
         <li class = "li"><a href="index.php?p=kaoqin">考勤&请假休假&福利&代扣款</a></li>
         <li class = "li"><a href="index.php?p=chanlianggongzi">产量工资</a></li> 
         <li class = "li"><a href="index.php?p=zhilianggongzi">质量工资</a></li>
         <li class = "li"><a href="index.php?p=gongzihuizong">工资汇总</a></li>
      </ul>
    </div>
</body>
</html>   




<?php }
}
?>