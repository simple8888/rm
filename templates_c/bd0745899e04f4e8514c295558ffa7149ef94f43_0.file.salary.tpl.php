<?php /* Smarty version 3.1.24, created on 2015-09-02 16:53:39
         compiled from "templates/default/salary.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2283555e6b913d90505_44119687%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd0745899e04f4e8514c295558ffa7149ef94f43' => 
    array (
      0 => 'templates/default/salary.tpl',
      1 => 1437124234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2283555e6b913d90505_44119687',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b913e24c25_49291571',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b913e24c25_49291571')) {
function content_55e6b913e24c25_49291571 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2283555e6b913d90505_44119687';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/salary.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<p style="float:left">
工资核算说明：
<br />1， 人力资源档案 和 考勤&福利&请假休假&代扣款 由行政人事部负责填写。产量工资 由生产部负责填写。质量工资 由质量部负责填写。各部门应该根据要求填写好本部门的数据。
<br />2， 递增工资 的计算说明：
<br />3， 生日红包 的计算说明：
</p>


<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<?php }
}
?>