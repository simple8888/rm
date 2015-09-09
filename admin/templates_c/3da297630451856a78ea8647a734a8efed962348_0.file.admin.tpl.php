<?php /* Smarty version 3.1.24, created on 2015-08-01 15:00:04
         compiled from "D:/Apache24/htdocs/rm/templates/admin/admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1748855bc6e74040b34_91909702%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da297630451856a78ea8647a734a8efed962348' => 
    array (
      0 => 'D:/Apache24/htdocs/rm/templates/admin/admin.tpl',
      1 => 1438412402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1748855bc6e74040b34_91909702',
  'variables' => 
  array (
    'tableName' => 0,
    'admin' => 0,
    'pageInfo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55bc6e740c96d7_25749120',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bc6e740c96d7_25749120')) {
function content_55bc6e740c96d7_25749120 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:/Apache24/htdocs/rm/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '1748855bc6e74040b34_91909702';
echo $_smarty_tpl->getSubTemplate ("../admin/header.admin.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<br />

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2><?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h2><a href="adminshuru.php">后台管理员输入</a></caption> 
                <tr> 
		<th>adminid</th><th>管理员用户名</th><th>密码</th><th>工厂</th><th>部门</th><th>真实姓名</th><th>备注</th><th>编辑</th>
                </tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['admin']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <td><?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['adminid'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['adminname'];?>
</td>
                        <td>******</td>	
                        <td><?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongchang'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['bumen'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['beizhu'];?>
</td>
                        
                       
		        <td><a href="adminmodify.php?amid=<?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['adminid'];?>
">修改</a>
                            <a href="admindelete.php?amid=<?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['adminid'];?>
">删除</a> </td>
                                
                    </tr>
                 <?php endfor; else: ?>                  
                    <p align="center">表里没有任何记录</p>  
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
<center><a href="index.php?p=admin">后台管理员表批量显示</a></center>


<?php echo $_smarty_tpl->getSubTemplate ("../admin/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php }
}
?>