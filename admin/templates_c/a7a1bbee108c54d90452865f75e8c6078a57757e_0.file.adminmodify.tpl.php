<?php /* Smarty version 3.1.24, created on 2015-08-01 14:14:31
         compiled from "D:/Apache24/htdocs/rm/templates/admin/adminmodify.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:468555bc63c71aaf17_12897755%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7a1bbee108c54d90452865f75e8c6078a57757e' => 
    array (
      0 => 'D:/Apache24/htdocs/rm/templates/admin/adminmodify.tpl',
      1 => 1438409661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '468555bc63c71aaf17_12897755',
  'variables' => 
  array (
    'adminid' => 0,
    'adminname' => 0,
    'password' => 0,
    'gongchang' => 0,
    'bumen' => 0,
    'name' => 0,
    'beizhu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55bc63c7227f32_57027481',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bc63c7227f32_57027481')) {
function content_55bc63c7227f32_57027481 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '468555bc63c71aaf17_12897755';
echo $_smarty_tpl->getSubTemplate ("../admin/header.admin.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请<span>修改</span>后台管理员表:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="align:right;margin-top:25px;margin-left:160px;" action="admincharumodify.php" method="POST">
    
    <input name="adminid" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['adminid']->value;?>
 />
    管理员用户名:<input name="adminname" type="text" size=31 <?php if ($_smarty_tpl->tpl_vars['adminname']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
 <?php }?> /><span>*</span><br />
    密码:<input name="password" type="password" size=40 <?php if ($_smarty_tpl->tpl_vars['password']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
 <?php }?> /><span>*</span><br />
    工厂:<select style="width:273px;" name="gongchang" size=1 ><option value="gc">请选择工厂</option><option value="" <?php if ($_smarty_tpl->tpl_vars['gongchang']->value == '') {?> selected="selected" <?php }?> ></option><option value="罗麦" <?php if ($_smarty_tpl->tpl_vars['gongchang']->value == "罗麦") {?> selected="selected" <?php }?> >罗麦</option><option value="博涵" <?php if ($_smarty_tpl->tpl_vars['gongchang']->value == "博涵") {?> selected="selected" <?php }?> >博涵</option></select> <br />
    部门:<input name="bumen" type="text" size=40 <?php if ($_smarty_tpl->tpl_vars['bumen']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['bumen']->value;?>
 <?php }?> /> <br />
    真实姓名:<input name="name" type="text" size=35 <?php if ($_smarty_tpl->tpl_vars['name']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?> /><span>*</span> <br />
    备注:<input name="beizhu" type="text" size=40 <?php if ($_smarty_tpl->tpl_vars['beizhu']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['beizhu']->value;?>
 <?php }?> /> <br />

    
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

<?php echo $_smarty_tpl->getSubTemplate ("../admin/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>