<?php /* Smarty version 3.1.24, created on 2015-07-27 21:22:11
         compiled from "D:/Apache24/htdocs/rm/templates/admin/usermodify.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:842255b63083168152_05458316%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7593fd6487c316544d408cc9b7256f6c70645ee' => 
    array (
      0 => 'D:/Apache24/htdocs/rm/templates/admin/usermodify.tpl',
      1 => 1438003297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '842255b63083168152_05458316',
  'variables' => 
  array (
    'userid' => 0,
    'username' => 0,
    'password' => 0,
    'gongchang' => 0,
    'bumen' => 0,
    'name' => 0,
    'rolecd' => 0,
    'r' => 0,
    'rolecode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b630831e5175_70039806',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b630831e5175_70039806')) {
function content_55b630831e5175_70039806 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '842255b63083168152_05458316';
echo $_smarty_tpl->getSubTemplate ("../admin/header.admin.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>用户表:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="usercharumodify.php" method="POST">
    
    <input name="userid" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
 />
    用户名:<input name="username" type="text" size=38 <?php if ($_smarty_tpl->tpl_vars['username']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <?php }?> /><span>*</span><br />
    密码:<input name="password" type="password" size=40 <?php if ($_smarty_tpl->tpl_vars['password']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
 <?php }?> /><span>*</span><br />
    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="gc">请选择工厂</option><option value="" <?php if ($_smarty_tpl->tpl_vars['gongchang']->value == '') {?> selected="selected" <?php }?> ></option><option value="罗麦" <?php if ($_smarty_tpl->tpl_vars['gongchang']->value == "罗麦") {?> selected="selected" <?php }?> >罗麦</option><option value="博涵" <?php if ($_smarty_tpl->tpl_vars['gongchang']->value == "博涵") {?> selected="selected" <?php }?> >博涵</option></select> <br />
    部门:<input name="bumen" type="text" size=40 <?php if ($_smarty_tpl->tpl_vars['bumen']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['bumen']->value;?>
 <?php }?> /> <br />
    真实姓名:<input name="name" type="text" size=35 <?php if ($_smarty_tpl->tpl_vars['name']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?> /><span>*</span> <br />
    
    角色代码:<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rolecd']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = (int) $_smarty_tpl->tpl_vars['r']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max']);
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
?> <input name="rolecode[]" type="checkbox" value=<?php echo $_smarty_tpl->tpl_vars['rolecd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['rolecode'];?>
 <?php if ((in_array($_smarty_tpl->tpl_vars['rolecd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['rolecode'],$_smarty_tpl->tpl_vars['rolecode']->value))) {?>  checked="checked" <?php }?> /><?php echo $_smarty_tpl->tpl_vars['rolecd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['rolecode'];?>
 <?php endfor; endif; ?> <br />

    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

<?php echo $_smarty_tpl->getSubTemplate ("../admin/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>