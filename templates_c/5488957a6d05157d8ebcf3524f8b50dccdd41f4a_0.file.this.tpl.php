<?php /* Smarty version 3.1.24, created on 2015-09-07 16:14:58
         compiled from "templates/default/this.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3156555ed4782efc283_56435691%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5488957a6d05157d8ebcf3524f8b50dccdd41f4a' => 
    array (
      0 => 'templates/default/this.tpl',
      1 => 1436184052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3156555ed4782efc283_56435691',
  'variables' => 
  array (
    'contact' => 0,
    'row' => 0,
    'col' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55ed478423eb33_35112275',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ed478423eb33_35112275')) {
function content_55ed478423eb33_35112275 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3156555ed4782efc283_56435691';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<table border="1" width="80%" align="center">
<caption><h1>联系人信息</h1></caption>
<tr>
<th>姓名</th><th>传真</th><th>电邮</th><th>电话</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['contact']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
       <tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['row']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$foreach_col_Sav = $_smarty_tpl->tpl_vars['col'];
?>
               <td><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
        <?php
$_smarty_tpl->tpl_vars['col'] = $foreach_col_Sav;
}
?>
        </tr>
<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
</table>   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>关于本站|联系我们</title>
    <style type="text/css">
       ul { margin-left: 0;	
padding-left: 0;			
list-style-type: none;						
float: left;			
width:140px;}	
    
        .mu .aSelected{ background-color:a9f9f4;color:red;text-decoration: none; }         
        .mu a{ background-color:#fff;color:#CC6714;text-decoration: none; }
        .mu a:hover{ color:green;text-decoration: none; }
    </style>
</head>
<body>
<div class="wrap">
    <div class="main">
        <div class="logo aLogo"><a class="logo_a" title="设为首页"></a></div>
        <div class="bdn">当前位置：
            <a href="./">首页</a> >> 关于本站
        </div>
        <div class="lmu">
            <div class="idt">关于本站</div>
            <div class="mu" id="mu">
                <ul>
                    <li><a href="#">系统首页</a></li>
                    <li><a href="#">诚聘英才</a></li>
                    <li><a href="#">联系我们</a></li>
                    <li><a href="#">使用声明</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        var mu = document.getElementById("mu");
        var a = mu.getElementsByTagName("a");
        mu.onclick = function(e){
            e = e || window.event;
            var target = e.srcElement || e.target;
            for(var i=0,len=a.length;i<len;i++){
                a[i].className = target == a[i] ? "aSelected":"";
            }
        };
    <?php echo '</script'; ?>
>
</div>
</body>
</html>

<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 

<?php }
}
?>