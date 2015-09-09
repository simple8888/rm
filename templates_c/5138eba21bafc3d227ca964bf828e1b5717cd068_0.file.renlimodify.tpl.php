<?php /* Smarty version 3.1.24, created on 2015-09-04 10:27:00
         compiled from "templates/default/renlimodify.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:444155e90174240850_98691323%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5138eba21bafc3d227ca964bf828e1b5717cd068' => 
    array (
      0 => 'templates/default/renlimodify.tpl',
      1 => 1437183478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '444155e90174240850_98691323',
  'variables' => 
  array (
    'yuangongID' => 0,
    'number' => 0,
    'name' => 0,
    'sex' => 0,
    'birthday' => 0,
    'idno' => 0,
    'cell' => 0,
    'tel' => 0,
    'email' => 0,
    'marriage' => 0,
    'hometown' => 0,
    'livesite' => 0,
    'zhiwu' => 0,
    'ruzhiriqi' => 0,
    'hetongqixian' => 0,
    'gongzuodidian' => 0,
    'shifouzhuchang' => 0,
    'shifouzaizhi' => 0,
    'lizhiriqi' => 0,
    'feature' => 0,
    'memo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e901744b5761_64095916',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e901744b5761_64095916')) {
function content_55e901744b5761_64095916 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '444155e90174240850_98691323';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/salary.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/renliziyuandangan.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <h2 style="position:absolute;margin-top:50px;z-index:2;">请<span>修改</span>员工基本信息:(带<span>*</span>的为必填项)</h2><br /><br />
    <form style="margin-top:25px;" action="renliziyuancharumodify.php" method="POST">
       
     <input name="yuangongID" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['yuangongID']->value;?>
 />
    工号:<input name="gonghao" type="text" size=40 <?php if ($_smarty_tpl->tpl_vars['number']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
 <?php }?> /><span>*</span>最多只能输入6位数 <br />    
    姓名:<input name="xingming" type="text" size=40 <?php if ($_smarty_tpl->tpl_vars['name']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?> /><span>*</span> <br />
    性别:<input  type="radio" name="xingbie" value="男" <?php if ($_smarty_tpl->tpl_vars['sex']->value == "男") {?> checked="checked" <?php }?> />男 <input name="xingbie" type="radio"  value="女" <?php if ($_smarty_tpl->tpl_vars['sex']->value == "女") {?> checked="checked" <?php }?> />女 <span>*</span><br />  
    出生日期:<input name="chushengriqi" type="text" onClick="WdatePicker()" size=35 <?php if ($_smarty_tpl->tpl_vars['birthday']->value == "0000-00-00") {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['birthday']->value;
}?> /><span>*</span>例如:1998-01-28 <br />  
    <!--age -->
    身份证号:<input name="shenfenzhenghao" type="text" size=35 <?php if ($_smarty_tpl->tpl_vars['idno']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['idno']->value;?>
 <?php }?> /><span>*</span>最多只能输入18位数 <br />
    手机:<input name="shouji" type="text" size=40 <?php if ($_smarty_tpl->tpl_vars['cell']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
 <?php }?> /><span>*</span>最多只能输入11位数 <br />
    固话:<input name="guhua" type="text" size=40 <?php if ($_smarty_tpl->tpl_vars['tel']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
 <?php }?> /> <br />    
    Email:<input name="email" type="text" size=39 <?php if ($_smarty_tpl->tpl_vars['email']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 <?php }?> /> <br />
    婚否:<input name="hunfou" type="radio" value="是" <?php if ($_smarty_tpl->tpl_vars['marriage']->value == "是") {?> checked="checked" <?php }?> />是 <input name="hunfou" type="radio" value="否" <?php if ($_smarty_tpl->tpl_vars['marriage']->value == "否") {?> checked="checked" <?php }?> />否 <input name="hunfou" type="radio" value="未提供" <?php if ($_smarty_tpl->tpl_vars['marriage']->value == "未提供") {?> checked="checked" <?php }?> />未提供<br /> 
    籍贯:<input name="jiguan" type="text" size=120 <?php if ($_smarty_tpl->tpl_vars['hometown']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['hometown']->value;?>
 <?php }?> /> <br />
    现居住地:<input name="xianjuzhudi" type="text" size=115 <?php if ($_smarty_tpl->tpl_vars['livesite']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['livesite']->value;?>
 <?php }?> /> <br />
    职务:<input name="zhiwu" type="radio" value="一线员工" <?php if ($_smarty_tpl->tpl_vars['zhiwu']->value == "一线员工") {?> checked="checked" <?php }?> >一线员工 <input name="zhiwu" type="radio" value="管理人员" <?php if ($_smarty_tpl->tpl_vars['zhiwu']->value == "管理人员") {?> checked="checked" <?php }?> />管理人员 <span>*</span><br />
    入职日期:<input name="ruzhiriqi" type="text" onClick="WdatePicker()" size=35 <?php if ($_smarty_tpl->tpl_vars['ruzhiriqi']->value == "0000-00-00") {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['ruzhiriqi']->value;?>
 <?php }?> /><span>*</span>例如:2015-01-25 <br /> 
    <!--工作年限-->
    合同期限:<input name="hetongqixian" type="text" size=35 <?php if ($_smarty_tpl->tpl_vars['hetongqixian']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['hetongqixian']->value;?>
 <?php }?> /> <br />
    工作地点:<input name="gongzuodidian" type="radio" value="罗麦" <?php if ($_smarty_tpl->tpl_vars['gongzuodidian']->value == "罗麦") {?> checked="checked" <?php }?> />罗麦 <input name="gongzuodidian" type="radio" value="博涵" <?php if ($_smarty_tpl->tpl_vars['gongzuodidian']->value == "博涵") {?> checked="checked" <?php }?> />博涵 <span>*</span><br />
    是否住厂:<input name="shifouzhuchang" type="radio" value="是" <?php if ($_smarty_tpl->tpl_vars['shifouzhuchang']->value == "是") {?> checked="checked" <?php }?> />是 <input name="shifouzhuchang" type="radio" value="否" <?php if ($_smarty_tpl->tpl_vars['shifouzhuchang']->value == "否") {?> checked="checked" <?php }?> />否 <span>*</span><br />
    是否在职:<input name="shifouzaizhi" type="radio" value="是" <?php if ($_smarty_tpl->tpl_vars['shifouzaizhi']->value == "是") {?> checked="checked" <?php }?> />是 <input name="shifouzaizhi" type="radio" value="否" <?php if ($_smarty_tpl->tpl_vars['shifouzaizhi']->value == "否") {?> checked="checked" <?php }?> />否 <span>*</span><br />
    离职日期:<input name="lizhiriqi" type="text" onClick="WdatePicker()" size=35 <?php if ($_smarty_tpl->tpl_vars['lizhiriqi']->value == "0000-00-00") {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['lizhiriqi']->value;
}?> /> <br />
    特长:<input name="techang" type="text" size=120 <?php if ($_smarty_tpl->tpl_vars['feature']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['feature']->value;?>
 <?php }?> /> <br />
    备注:<textarea style="vertical-align:middle;" name="beizhu" cols="88" rows=2 value=<?php echo $_smarty_tpl->tpl_vars['memo']->value;?>
 /></textarea><br />
    <center style="margin-top:4px;"> <input class="button" type="submit" name="submit" value="提交修改" /> </center>
                                

    </form> 

<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>