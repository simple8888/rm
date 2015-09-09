<?php /* Smarty version 3.1.24, created on 2015-09-02 16:55:59
         compiled from "templates/default/kaoqinxiaoshi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3269755e6b99f825c28_26887323%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf3fedcc0c343886ab1d59dd4dc22911b3e85533' => 
    array (
      0 => 'templates/default/kaoqinxiaoshi.tpl',
      1 => 1438071797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3269755e6b99f825c28_26887323',
  'variables' => 
  array (
    'tableName' => 0,
    'kaoqinxiaoshi' => 0,
    'pageInfo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b99f985571_06902862',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b99f985571_06902862')) {
function content_55e6b99f985571_06902862 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'D:/Apache24/htdocs/rm/libs/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '3269755e6b99f825c28_26887323';
echo $_smarty_tpl->getSubTemplate ("default/header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/salary.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("default/kaoqin.header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<br />

<table class="table" style="margin-top:20px;width:80%;text-align:center;">
		<caption><h2><?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h2><a href="index.php?p=kaoqinxiaoshishuru">最低工资标准输入</a></caption> 
                <tr> 
		<th>xiaoshiID</th><th>年度</th><th>工厂</th><th>小时最低工资</th><th>日最低工资</th><th>月最低工资</th><th>备注</th><th>编辑</th>
                </tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiaoshiID'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['niandu'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['gongchang'];?>
</td>	
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiaoshizd'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['rizuidi'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['yuezuidi'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['beizhu'];?>
</td>
                        
                      
                        
		        <td><a href="index.php?p=kaoqinxiaoshimodify&xsID=<?php echo $_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiaoshiID'];?>
">修改</a>
                            <a href="index.php?p=kaoqinxiaoshidelete&xsID=<?php echo $_smarty_tpl->tpl_vars['kaoqinxiaoshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['xiaoshiID'];?>
">删除</a> </td>
                                
                    </tr>
                 <?php endfor; else: ?>                  
                    <p align="center">表里没有任何记录</p>  
                 <?php endif; ?> 			
	       </table>
注意:最低工资标准，每年应根据当地政府的相关规定在相应月份及时做出调整,否则将得不到正确的工资汇总！
               
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
	
<center><a href="index.php?p=kaoqinxiaoshi">最低工资表批量显示</a></center>


<?php echo $_smarty_tpl->getSubTemplate ("default/footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php }
}
?>