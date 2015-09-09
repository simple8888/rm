<?php /* Smarty version 3.1.24, created on 2015-09-02 18:51:41
         compiled from "templates/default/renliziyuan.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71055e6d4bd617b81_64883410%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda5089be1aaeb7257d053431e4b9d1d38425cd6' => 
    array (
      0 => 'templates/default/renliziyuan.tpl',
      1 => 1438591970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71055e6d4bd617b81_64883410',
  'variables' => 
  array (
    'tableName' => 0,
    'yuangong' => 0,
    'pageInfo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6d4bd894791_69866109',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6d4bd894791_69866109')) {
function content_55e6d4bd894791_69866109 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:/Apache24/htdocs/rm/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '71055e6d4bd617b81_64883410';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/salary.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/renliziyuandangan.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<br /><br /><br />                                                
<form action="index.php" method="GET" style="margin-top:-14px;"><input name="p" type="hidden" value="renliziyuancx" />入职日期:<input name="ruzhiriqi1" type="text" onClick="WdatePicker()" size=10 />－〉入职日期:<input name="ruzhiriqi2" type="text" onClick="WdatePicker()" size=10 /> 工号:<input name="number" type="text" size=6 /> 姓名:<input name="name" type="text" size=6  /> 工厂:<select name="factory" size=1><option value="all">全部</option><option value="luomai" >罗麦</option><option value="bohan">博涵</option></select> 住厂:<select name="zhuchang" size=1><option value="all">全部</option><option value="是" >是</option><option value="否">否</option></select> 在职:<select name="zaizhi" size=1><option value="all">全部</option><option value="是" >是</option><option value="否">否</option></select>&nbsp;<input class="button" type="submit" value="信息查询" /></form>


<table class="table">
		<caption><h2><?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h2></caption>
                <tr> 
		<th>ID</th><th>工号</th><th>姓名</th><th>性别</th><th>出生日期</th><th>年龄</th><th>身份证号</th><th>手机</th><th>固话</th><th>Email</th><th>婚否</th><th>籍贯</th><th>现居住地</th><th>职务</th><th>入职日期</th><th>合同期限</th><th>工厂</th><th>是否住厂</th><th>是否在职</th><th>离职日期</th><th>特长</th><th>备注</th><th>编辑</th>
                </tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['yuangong']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['number'];?>
</td>	
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['sex'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['birthday'] == '0000-00-00') {?>
                                <?php echo NULL;?>

                             <?php } else { ?>   
                                  <?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['birthday'];?>

                            <?php }?>  
                        </td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['age'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['idno'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['cell'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['tel'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['marriage'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hometown'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['livesite'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['zhiwu'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['ruzhiriqi'] == '0000-00-00') {?>
                                <?php echo NULL;?>

                             <?php } else { ?>   
                                  <?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['ruzhiriqi'];?>

                            <?php }?>  
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['hetongqixian'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongzuodidian'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shifouzhuchang'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['shifouzaizhi'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['lizhiriqi'] == '0000-00-00') {?>
                                <?php echo NULL;?>

                             <?php } else { ?>   
                                  <?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['lizhiriqi'];?>

                            <?php }?>  
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['feature'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['memo'];?>
</td>
                        <td><a href="index.php?p=renlimodify&ygID=<?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
">修改</a>
		            <a href="index.php?p=renlidelete&ygID=<?php echo $_smarty_tpl->tpl_vars['yuangong']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuangongID'];?>
">删除</a></td>
                                
                    </tr>
                 <?php endfor; else: ?>                  
                    <p align="center">没有任何员工记录</p>  
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
	
<center><a href="index.php?p=renliziyuanshuru">员工信息输入</a></center>

<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>