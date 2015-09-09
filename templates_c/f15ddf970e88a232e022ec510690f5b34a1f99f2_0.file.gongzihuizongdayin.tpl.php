<?php /* Smarty version 3.1.24, created on 2015-09-02 16:35:15
         compiled from "templates/default/gongzihuizongdayin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2005855e6b4c3b4fff0_77476880%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f15ddf970e88a232e022ec510690f5b34a1f99f2' => 
    array (
      0 => 'templates/default/gongzihuizongdayin.tpl',
      1 => 1441005951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2005855e6b4c3b4fff0_77476880',
  'variables' => 
  array (
    'title' => 0,
    'tableName' => 0,
    'gongzihuizong' => 0,
    'xiaoshizd' => 0,
    'rizuidi' => 0,
    'pdzq' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b4c3e3a228_58403999',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b4c3e3a228_58403999')) {
function content_55e6b4c3e3a228_58403999 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:/Apache24/htdocs/rm/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '2005855e6b4c3b4fff0_77476880';
?>
<html> 
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<style type="text/css">

 @media Print { .Noprn { DISPLAY:none; }}
.table{ border-collapse:collapse; align:center; width:100%;cellspacing:0px; cellpadding:0px; border:solid 0px #9a9ca0;} /* border:solid 1px #d9e4f2; */
.table th{ background: #e5f7e2;font-size:10px;font-family:宋体;font-weight:normal;border:solid 1px #9a9ca0;}
.table td{ font-size:10px;border:solid 1px #9a9ca0;}
.table tr{ line-height:11px;}

</style> 
</head> 

<?php echo '<script'; ?>
 type="text/javascript">
function preview(){
bdhtml=window.document.body.innerHTML;
sprnstr="<!--startprint-->";
eprnstr="<!--endprint-->";
prnhtml=bdhtml.substr(bdhtml.indexOf(sprnstr)+17);
prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));
window.print();
window.document.body.innerHTML=bdhtml;
} 
<?php echo '</script'; ?>
> 

<body style="font-size:8px;"> 
<form id="WebForm1" metdod="post" > 
<!--<center class="Noprn">本部分以上不被打印</center> -->
<!--startprint-->
<div align="center"> 
<table class="table"> 
<caption><?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</caption>

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
                <tr> 
		<th>工号</th><th>姓名</th><th>日期</th><th>法定出勤</th><th>法定加班</th><th>周末加班</th><th>国定待薪</th><th>婚假</th><th>产假</th><th>丧假</th><th>病假</th><th>平时请假</th><th>周末请假</th><th>全勤</th><th>递增</th><th>培训补贴</th><th>岗位津贴</th><th>生日红包</th><th>发展奖</th><th>高温费</th><th>工伤</th><th>水电费</th><th>产能补贴</th><th>小时最低工资补贴</th><th>装货</th><th>卸货</th><th>杂活</th><th>异常</th><th>产量工资</th><th>质量工资</th><th>应发工资</th><th>社保</th><th>个税</th><th>实发工资</th>
                </tr>
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
</div>
 
<!--endprint-->
<!-- <center class="Noprn">本部分以下不被打印</center> -->

<div class="Noprn" style="margin-top:20px;" align="center"> 
<p style="border-top: 1px dotted #CCC;padding-top: 6px;"><input type="button" name="print" onclick="preview()" value="预览并打印"> <input type="button" name="back" onClick=window.location.href="index.php?p=gongzihuizong" value="返回系统"></p>
</div> 

<!--<p class="Noprn">不打印</p> 
<input class="Noprn" type="button" onclick="window.print()" value="print"> -->

</form> 
</body> 
</html> <?php }
}
?>