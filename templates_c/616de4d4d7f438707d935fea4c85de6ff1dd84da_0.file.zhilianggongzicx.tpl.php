<?php /* Smarty version 3.1.24, created on 2015-09-02 16:49:16
         compiled from "templates/default/zhilianggongzicx.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2163655e6b80c864f23_95830698%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '616de4d4d7f438707d935fea4c85de6ff1dd84da' => 
    array (
      0 => 'templates/default/zhilianggongzicx.tpl',
      1 => 1438592368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2163655e6b80c864f23_95830698',
  'variables' => 
  array (
    'qishiriqi' => 0,
    'zhongzhiriqi' => 0,
    'number' => 0,
    'name' => 0,
    'factory' => 0,
    'zhuchang' => 0,
    'tableName' => 0,
    'zhilianggongzi' => 0,
    'pageInfo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b80c995a73_60187356',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b80c995a73_60187356')) {
function content_55e6b80c995a73_60187356 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:/Apache24/htdocs/rm/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '2163655e6b80c864f23_95830698';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/salary.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/zhilianggongzi.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<br /><br /><br />                                             
<form name="formzl" method="GET" style="margin-top:-14px;"><input name="p" id="zhiliang" type="hidden" value="" />起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=10 <?php if ($_smarty_tpl->tpl_vars['qishiriqi']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['qishiriqi']->value;?>
 <?php }?> />－〉终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=10 <?php if ($_smarty_tpl->tpl_vars['zhongzhiriqi']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['zhongzhiriqi']->value;?>
 <?php }?> /> 工号:<input name="number" type="text" size=6 <?php if ($_smarty_tpl->tpl_vars['number']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
 <?php }?> /> 姓名:<input name="name" type="text" size=6 <?php if ($_smarty_tpl->tpl_vars['name']->value == null) {?> value="" <?php } else { ?> value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?> /> 工厂:<select name="factory" size=1  ><option  value="all" >全部</option><option value="luomai" <?php if ($_smarty_tpl->tpl_vars['factory']->value == "luomai") {?> selected="selected" <?php }?> >罗麦</option><option value="bohan" <?php if ($_smarty_tpl->tpl_vars['factory']->value == "bohan") {?> selected="selected" <?php }?> >博涵</option></select> 住厂:<select name="zhuchang" size=1  ><option  value="全部" >全部</option><option value="是" <?php if ($_smarty_tpl->tpl_vars['zhuchang']->value == "是") {?> selected="selected" <?php }?> >是</option><option value="否" <?php if ($_smarty_tpl->tpl_vars['zhuchang']->value == "否") {?> selected="selected" <?php }?> >否</option></select>&nbsp;<input class="button" type="submit" value="质量查询" onClick="zhiliangchaxun()" />&nbsp;<input class="button" type="submit" value="质量汇总" onClick="zhilianghuizong()" /><input type="hidden" name="clearsession" value="true" /></form>

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2><?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h2></caption>
                <tr> 
		<th>yID</th><th>zID</th><th>工号</th><th>姓名</th><th>日期</th><th>质量奖励</th><th>质量扣款</th><th>当日质量工资</th><th>编辑</th>
                </tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['zhilianggongzi']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		    <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#DDFFCC,#cafab1"),$_smarty_tpl);?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['ygongID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['number'];?>
</td>	
                        <td><?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['name'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['riqi'] == '0000-00-00') {?>
                                <?php echo NULL;?>

                             <?php } else { ?>   
                                  <?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['riqi'];?>

                            <?php }?>  
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhiliangjl'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhiliangkk'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhilianggongzi'];?>
</td>

                        <td><a href="zhilianggongzishuru.php?ygID=<?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
&zlID=<?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhiliangID'];?>
">插入</a>
		            <a href="zhilianggongzimodify.php?ygID=<?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
&zlID=<?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhiliangID'];?>
">修改</a>
                            <a href="zhilianggongzidelete.php?ygID=<?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
&zlID=<?php echo $_smarty_tpl->tpl_vars['zhilianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhiliangID'];?>
">删除</a> </td>
                                
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
	
<center><a href="index.php?p=zhilianggongzi">质量工资数据批量显示</a></center>

<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php }
}
?>