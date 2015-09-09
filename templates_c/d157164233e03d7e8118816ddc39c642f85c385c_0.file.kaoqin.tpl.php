<?php /* Smarty version 3.1.24, created on 2015-09-02 16:18:16
         compiled from "templates/default/kaoqin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1401155e6b0c86df956_02105642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd157164233e03d7e8118816ddc39c642f85c385c' => 
    array (
      0 => 'templates/default/kaoqin.tpl',
      1 => 1438592107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401155e6b0c86df956_02105642',
  'variables' => 
  array (
    'tableName' => 0,
    'kaoqin' => 0,
    'pageInfo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b0c8833725_18370737',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b0c8833725_18370737')) {
function content_55e6b0c8833725_18370737 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:/Apache24/htdocs/rm/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '1401155e6b0c86df956_02105642';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/salary.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/kaoqin.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<br /><br /><br />                                                   
<form action="index.php" method="GET" style="margin-top:-14px;"><input name="p" type="hidden" value="kaoqincx" />起始日期:<input name="qishiriqi" type="text" onClick="WdatePicker()" size=10 />－〉终止日期:<input name="zhongzhiriqi" type="text" onClick="WdatePicker()" size=10 /> 工号:<input name="number" type="text" size=6 /> 姓名:<input name="name" type="text" size=6  /> 工厂:<select name="factory" size=1><option value="all">全部</option><option value="luomai" >罗麦</option><option value="bohan">博涵</option></select> 住厂:<select name="zhuchang" size=1><option value="全部">全部</option><option value="是" >是</option><option value="否">否</option></select>&nbsp;<input class="button" type="submit" value="考勤查询" />&nbsp;<input class="button" type="button" value="考勤汇总" onClick=window.location.href='#' /></form>

<table class="table" style="margin-top:20px;">
		<caption><h2><?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h2></caption>
                <tr> 
		<th>yID</th><th>kID</th><th>工号</th><th>姓名</th><th>日期</th><th>法定出勤</th><th>法定加班</th><th>周末加班</th><th>国定待薪</th><th>婚假</th><th>产假</th><th>丧假</th><th>病假</th><th>平时请假</th><th>周末请假</th><th>全勤</th><th>递增</th><th>培训补贴</th><th>岗位津贴</th><th>生日红包</th><th>发展奖</th><th>高温费</th><th>工伤</th><th>水电费</th><th>编辑</th>
                </tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kaoqin']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['ygongID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['number'];?>
</td>	
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['name'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['riqi'] == '0000-00-00') {?>
                                <?php echo NULL;?>

                             <?php } else { ?>   
                                  <?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['riqi'];?>

                            <?php }?>  
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingcq'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fadingjb'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumojb'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['guodingdx'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hunjia'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['chanjia'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['sangjia'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['bingjia'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['pingshiqj'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhoumoqj'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['quanqin'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['dizeng'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['peixun'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['jintie'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hongbao'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fazhan'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gaowen'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongshang'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shuidian'];?>
</td>
         

                        <td><a href="index.php?p=kaoqinshuru&ygID=<?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
&kqID=<?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['kaoqinID'];?>
">插入</a>
		            <a href="index.php?p=kaoqinmodify&ygID=<?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
&kqID=<?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['kaoqinID'];?>
">修改</a>
                            <a href="index.php?p=kaoqindelete&ygID=<?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
&kqID=<?php echo $_smarty_tpl->tpl_vars['kaoqin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['kaoqinID'];?>
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
	
<center><a href="index.php?p=kaoqin">考勤&请假休假&福利&代扣款等数据批量显示</a></center>


<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php }
}
?>