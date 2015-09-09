<?php /* Smarty version 3.1.24, created on 2015-09-02 16:48:38
         compiled from "templates/default/chanlianggongzi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:568155e6b7e6319298_15210325%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0b73e942c54644409e94c9723c944b463cfa4da' => 
    array (
      0 => 'templates/default/chanlianggongzi.tpl',
      1 => 1438592279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '568155e6b7e6319298_15210325',
  'variables' => 
  array (
    'tableName' => 0,
    'chanlianggongzi' => 0,
    'pageInfo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b7e643e251_39176839',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b7e643e251_39176839')) {
function content_55e6b7e643e251_39176839 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:/Apache24/htdocs/rm/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '568155e6b7e6319298_15210325';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/salary.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/chanlianggongzi.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<br /><br /><br />                                                           
<form action="index.php" method="GET" style="margin-top:-14px;"><input name="p" type="hidden" value="chanlianggongzicx" />起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=10 />－〉终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=10 /> 工号:<input name="number" type="text" size=6 /> 姓名:<input name="name" type="text" size=6  /> 工厂:<select name="factory" size=1><option value="all">全部</option><option value="luomai" >罗麦</option><option value="bohan">博涵</option></select> 住厂:<select name="zhuchang" size=1><option value="全部">全部</option><option value="是" >是</option><option value="否">否</option></select>&nbsp;<input class="button" type="submit" value="产量查询" />&nbsp;<input class="button" type="button" value="产量汇总" onClick=window.location.href='#' /></form>

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2><?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h2></caption>
                <tr> 
		<th>yID</th><th>cID</th><th>工号</th><th>姓名</th><th>工序</th><th>日期</th><th>产量</th><th>产能补贴</th><th>装货</th><th>卸货</th><th>杂活</th><th>异常</th><th>当日产量工资</th><th>编辑</th>
                </tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['chanlianggongzi']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['ygongID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['number'];?>
</td>	
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongxu'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['riqi'] == '0000-00-00') {?>
                                <?php echo NULL;?>

                             <?php } else { ?>   
                                  <?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['riqi'];?>

                            <?php }?>  
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanliang'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['channengbt'];?>
</td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhuanghuo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiehuo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zahuo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yichang'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanlianggongzi'];?>
</td>
                      
                        <td><a href="index.php?p=chanlianggongzishuru&ygID=<?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
&clID=<?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanliangID'];?>
&gzdd=<?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongzuodidian'];?>
">插入</a>
		            <a href="index.php?p=chanlianggongzimodify&ygID=<?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
&clID=<?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanliangID'];?>
&gzdd=<?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongzuodidian'];?>
">修改</a>
                            <a href="index.php?p=chanlianggongzidelete&ygID=<?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
&clID=<?php echo $_smarty_tpl->tpl_vars['chanlianggongzi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanliangID'];?>
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
	
<center><a href="index.php?p=chanlianggongzi">产量工资数据批量显示</a></center>


<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php }
}
?>