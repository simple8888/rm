<?php /* Smarty version 3.1.24, created on 2015-09-02 18:10:29
         compiled from "templates/default/gongzihuizongcx.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16155e6cb157195a6_86391049%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3407f3e2a13bf59c5bbd30dd60a5e0fbef8e5b01' => 
    array (
      0 => 'templates/default/gongzihuizongcx.tpl',
      1 => 1441188162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16155e6cb157195a6_86391049',
  'variables' => 
  array (
    'qishiriqi' => 0,
    'zhongzhiriqi' => 0,
    'number' => 0,
    'name' => 0,
    'factory' => 0,
    'yf' => 0,
    'r' => 0,
    'pandianzhouqi' => 0,
    'tableName' => 0,
    'gongzihuizong' => 0,
    'xiaoshizd' => 0,
    'rizuidi' => 0,
    'pdzq' => 0,
    'pageInfo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6cb15a1aed2_45587656',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6cb15a1aed2_45587656')) {
function content_55e6cb15a1aed2_45587656 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:/Apache24/htdocs/rm/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '16155e6cb157195a6_86391049';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/salary.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/gongzihuizong.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<br /><br /><br />
<form name="formhz" method="GET" style="margin-top:-14px;"><input name="p" id="huizong" type="hidden" value="" />起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=10 <?php if ($_smarty_tpl->tpl_vars['qishiriqi']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['qishiriqi']->value;?>
 <?php }?> />－〉终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=10 <?php if ($_smarty_tpl->tpl_vars['zhongzhiriqi']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['zhongzhiriqi']->value;?>
 <?php }?> /> 工号:<input name="number" type="text" size=6 <?php if ($_smarty_tpl->tpl_vars['number']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
 <?php }?> /> 姓名:<input name="name" type="text" size=6 <?php if ($_smarty_tpl->tpl_vars['name']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?> /> 工厂:<select name="factory" size=1  ><option  value="all" >全部</option><option value="罗麦" <?php if ($_smarty_tpl->tpl_vars['factory']->value == "罗麦") {?> selected="selected" <?php }?> >罗麦</option><option value="博涵" <?php if ($_smarty_tpl->tpl_vars['factory']->value == "博涵") {?> selected="selected" <?php }?> >博涵</option></select> 盘点周期:<select  name="pandianzhouqi" size=1><option value="">请选择月份</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['yf']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = (int) $_smarty_tpl->tpl_vars['r']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = (int) $_smarty_tpl->tpl_vars['r']->value-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
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
?> <option value=<?php echo $_smarty_tpl->tpl_vars['yf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongpan'];?>
 <?php if ($_smarty_tpl->tpl_vars['yf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongpan'] == $_smarty_tpl->tpl_vars['pandianzhouqi']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['yf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongpan'];?>
</option> <?php endfor; endif; ?> </select>&nbsp;<input class="button" type="submit" value="工资查询" onclick="gongzichaxun()"/>&nbsp;<input class="button" type="submit" value="导出Excel" onClick="toexcel()" /><input type="hidden" name="clearsession" value="true" /></form>

<table class="table" style="margin-top:20px;width:100%;text-align:center;">
		<caption><h2><?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h2></caption>
                <tr> 
		<th>工号</th><th>姓名</th><th>日期</th><th>法定出勤</th><th>法定加班</th><th>周末加班</th><th>国定待薪</th><th>婚假</th><th>产假</th><th>丧假</th><th>病假</th><th>平时请假</th><th>周末请假</th><th>全勤</th><th>递增</th><th>培训补贴</th><th>岗位津贴</th><th>生日红包</th><th>发展奖</th><th>高温费</th><th>工伤</th><th>水电费</th><th>产能补贴</th><th>小时最低工资补贴</th><th>装货</th><th>卸货</th><th>杂活</th><th>异常</th><th>产量工资</th><th>质量工资</th><th>应发工资</th><th>社保</th><th>个税</th><th>实发工资</th>
                </tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gongzihuizong']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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


<?php $_smarty_tpl->_capture_stack[0][] = array("xiaoshizd", null, null); ob_start();
if ((($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingcq'] == 0) && ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingjb'] == 0) && ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumojb'] == 0))) {?> <?php echo null;?>
 <?php } elseif (($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingcq']*$_smarty_tpl->tpl_vars['xiaoshizd']->value+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingjb']*$_smarty_tpl->tpl_vars['xiaoshizd']->value*1.5+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumojb']*$_smarty_tpl->tpl_vars['xiaoshizd']->value*2+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shebao']) > ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['quanqin']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['dizeng']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['peixun']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['jintie']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['channengbt']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhuanghuo']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiehuo']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zahuo']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yichang']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanlianggongzi']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhilianggongzi'])) {?> <?php echo round(($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingcq']*$_smarty_tpl->tpl_vars['xiaoshizd']->value+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingjb']*$_smarty_tpl->tpl_vars['xiaoshizd']->value*1.5+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumojb']*$_smarty_tpl->tpl_vars['xiaoshizd']->value*2+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shebao'])-($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['quanqin']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['dizeng']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['peixun']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['jintie']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['channengbt']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhuanghuo']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiehuo']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zahuo']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yichang']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanlianggongzi']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhilianggongzi']),2);?>
 <?php } else { ?> <?php echo null;?>
 <?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("yfgz", null, null); ob_start();
if ((($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingcq'] == 0) && ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingjb'] == 0) && ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumojb'] == 0))) {?> <?php echo null;?>
 <?php } else { ?> <?php echo round(($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['guodingdx']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hunjia']*$_smarty_tpl->tpl_vars['rizuidi']->value*0.8+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanjia']*$_smarty_tpl->tpl_vars['rizuidi']->value*0.8+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['sangjia']*$_smarty_tpl->tpl_vars['rizuidi']->value*0.8+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['bingjia']*$_smarty_tpl->tpl_vars['rizuidi']->value*0.8+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['quanqin']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['dizeng']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['peixun']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['jintie']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hongbao']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fazhan']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gaowen']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongshang']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['channengbt']+Smarty::$_smarty_vars['capture']['xiaoshizd']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhuanghuo']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiehuo']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zahuo']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yichang']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanlianggongzi']+$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhilianggongzi']),2);?>
 <?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("yn", null, null); ob_start();
if ((Smarty::$_smarty_vars['capture']['yfgz']-$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shebao']-3500) < 0) {?> <?php echo 0;?>
 <?php } else { ?> <?php echo Smarty::$_smarty_vars['capture']['yfgz']-$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shebao']-3500;?>
 <?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("gs", null, null); ob_start();
if (Smarty::$_smarty_vars['capture']['yn'] <= 1500) {?> <?php echo Smarty::$_smarty_vars['capture']['yn']*0.03;?>
 <?php } elseif (Smarty::$_smarty_vars['capture']['yn'] <= 4500) {?> <?php echo Smarty::$_smarty_vars['capture']['yn']*0.1-105;?>
 <?php } elseif (Smarty::$_smarty_vars['capture']['yn'] <= 9000) {?> <?php echo Smarty::$_smarty_vars['capture']['yn']*0.2-555;?>
 <?php } elseif (Smarty::$_smarty_vars['capture']['yn'] <= 35000) {?> <?php echo Smarty::$_smarty_vars['capture']['yn']*0.25-1005;?>
 <?php } elseif (Smarty::$_smarty_vars['capture']['yn'] <= 55000) {?> <?php echo Smarty::$_smarty_vars['capture']['yn']*0.3-2755;?>
 <?php } elseif (Smarty::$_smarty_vars['capture']['yn'] <= 80000) {?> <?php echo Smarty::$_smarty_vars['capture']['yn']*0.35-5505;?>
 <?php } else { ?> <?php echo Smarty::$_smarty_vars['capture']['yn']*0.45-13505;?>
 <?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		    <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#DDFFCC,#cafab1"),$_smarty_tpl);?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['number'];?>
</td>	
                        <td><?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pdzq']->value;?>
</td>

                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingcq'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingcq'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingjb'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingjb'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumojb'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumojb'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['guodingdx'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['guodingdx'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hunjia'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hunjia'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanjia'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanjia'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['sangjia'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['sangjia'];?>
 <?php }?> </td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['bingjia'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['bingjia'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['pingshiqj'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['pingshiqj'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumoqj'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumoqj'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['quanqin'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['quanqin'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['dizeng'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['dizeng'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['peixun'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['peixun'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['jintie'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['jintie'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hongbao'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hongbao'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fazhan'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fazhan'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gaowen'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gaowen'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongshang'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongshang'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shuidian'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shuidian'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['channengbt'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['channengbt'];?>
 <?php }?></td>
                                
                        <td><?php echo Smarty::$_smarty_vars['capture']['xiaoshizd'];?>
</td>

                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhuanghuo'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhuanghuo'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiehuo'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiehuo'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zahuo'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zahuo'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yichang'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yichang'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanlianggongzi'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanlianggongzi'];?>
 <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhilianggongzi'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhilianggongzi'];?>
 <?php }?></td>
                                       
                        <td><?php echo Smarty::$_smarty_vars['capture']['yfgz'];?>
</td>
 
                              
                        <td><?php if ((($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingcq'] == 0) && ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingjb'] == 0) && ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumojb'] == 0))) {?> <?php echo null;?>
 <?php } elseif ($_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shebao'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shebao'];?>
 <?php }?></td>
                               
                        <td><?php if (Smarty::$_smarty_vars['capture']['gs'] == 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo round(Smarty::$_smarty_vars['capture']['gs'],2);?>
 <?php }?></td>
                               
                        <td><?php if ((Smarty::$_smarty_vars['capture']['yfgz']-$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shebao']-Smarty::$_smarty_vars['capture']['gs']-$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shuidian']) <= 0) {?> <?php echo null;?>
 <?php } else { ?> <?php echo round(Smarty::$_smarty_vars['capture']['yfgz']-$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shebao']-Smarty::$_smarty_vars['capture']['gs']-$_smarty_tpl->tpl_vars['gongzihuizong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shuidian'],2);?>
 <?php }?></td>


                     
                                
                    </tr>
                 <?php endfor; else: ?>                  
                    <p align="center">没有任何记录</p>  
                 <?php endif; ?> 			
	       </table>
               
	<p align="center">
		共<b> <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['row_total'];?>
 </b>条记录，
		显示第 <b> <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_start'];?>
 </b>-<b> <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_end'];?>
 </b> 条记录
		<a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?page=1'>|&lt;</a>
		<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['prev_page']) {?>
			<a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['prev_page'];?>
'>&lt;&lt;</a>
		<?php } else { ?>	
			&lt;&lt;
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['next_page']) {?>
			<a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['next_page'];?>
'>>></a>
		<?php } else { ?>	
			>>
		<?php }?>
		<a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_num'];?>
'>>|</a>
		当前第<b><?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['current_page'];?>
/<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_num'];?>
 </b>页
	</p>	
<center><a href="index.php?p=gongzihuizong">工资汇总表批量显示</a></center>	

<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>