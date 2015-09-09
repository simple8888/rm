<?php /* Smarty version 3.1.24, created on 2015-07-27 21:24:10
         compiled from "D:/Apache24/htdocs/rm/templates/admin/usershuru.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1836055b630fa3ae228_19771895%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '811676d33cafeb071717a16e86757dc1dc4c5626' => 
    array (
      0 => 'D:/Apache24/htdocs/rm/templates/admin/usershuru.tpl',
      1 => 1438003430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1836055b630fa3ae228_19771895',
  'variables' => 
  array (
    'rolecd' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b630fa41b847_95507433',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b630fa41b847_95507433')) {
function content_55b630fa41b847_95507433 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1836055b630fa3ae228_19771895';
echo $_smarty_tpl->getSubTemplate ("../admin/header.admin.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入用户信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form name="form" action="usercharu.php" style="align:right;margin-top:25px;margin-left:160px;" method="POST">

    用户名:<input name="username" type="text" size=38 /><span>*</span><br />
    密码:<input name="password" type="password" size=40 /><span>*</span><br />
    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="">请选择工厂</option><option value="" ></option><option value="罗麦" >罗麦</option><option value="博涵">博涵</option></select> <br />
    部门:<input name="bumen" type="text" size=40 /> <br />
    真实姓名:<input name="name" type="text" size=35 /><span>*</span><br />    
    
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
 /><?php echo $_smarty_tpl->tpl_vars['rolecd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['rolecode'];?>
 <?php endfor; endif; ?> <br />

          
    <div style="margin-left:80px;"> <input class="button" type="submit" name="submit" value="提交"  />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

<?php echo $_smarty_tpl->getSubTemplate ("../admin/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>