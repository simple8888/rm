<?php /* Smarty version 3.1.24, created on 2015-09-07 10:19:55
         compiled from "templates/default/zhilianggongzishuru.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1979155ecf44b06f021_45791070%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eafdeb98c3f97e03aec4b25f35a4d5986b55e64' => 
    array (
      0 => 'templates/default/zhilianggongzishuru.tpl',
      1 => 1437136030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1979155ecf44b06f021_45791070',
  'variables' => 
  array (
    'ygongID' => 0,
    'zhiliangID' => 0,
    'number' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55ecf44b0f3d42_85971732',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ecf44b0f3d42_85971732')) {
function content_55ecf44b0f3d42_85971732 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1979155ecf44b06f021_45791070';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/salary.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/zhilianggongzi.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <h2 style="position:absolute;margin-top:50px;z-index:2;margin-left:160px;">请输入质量工资信息数据:(带<span>*</span>的为必填项,带<img style="vertical-align:middle;" src="images/moon3.png"title="月数据" />为月度数据)</h2><br /><br />
    <form name="formkq" style="align:right;margin-top:25px;margin-left:160px;" method="POST">
    <input name="ygongID" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['ygongID']->value;?>
 />
    <input name="zhiliangID" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['zhiliangID']->value;?>
 />
    工号:<label> <?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</label> <br />
    姓名:<label> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</label> <br />
    日期:<input name="riqi" type="text" onClick="WdatePicker()" size=40 /><span>*</span> <- <input style="width:86px" class="button"  type="submit" name="piliangshurur" value="批量输入日期" onClick="piliangshururiqizl()" /> 　<- <input style="width:86px" class="button"  type="submit" name="piliangshanchuriqi" value="批量删除日期" onClick="piliangshanchuriqizl()" />包括当日的数据,删除前筛选罗麦或博涵 <br />    
    质量奖励:<input name="zhiliangjl" type="text" size=35 /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />
    质量扣款:<input name="zhiliangkk" type="text" size=35 /><img style="vertical-align:middle;" src="images/moon3.png"title="月数据" /> <br />
    
       
    <div style="margin-left:100px;"> <input class="button" type="submit" name="submit" value="提交" onClick="tijiaozl()" />
             <input class="button" type="reset" name="reset" value="重置" /> </div>

    </form> 

<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>