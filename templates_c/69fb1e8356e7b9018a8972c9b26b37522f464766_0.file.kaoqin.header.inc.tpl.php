<?php /* Smarty version 3.1.24, created on 2015-09-02 16:18:16
         compiled from "templates/default/kaoqin.header.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1179855e6b0c88f6c52_60178777%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fb1e8356e7b9018a8972c9b26b37522f464766' => 
    array (
      0 => 'templates/default/kaoqin.header.inc.tpl',
      1 => 1436841039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1179855e6b0c88f6c52_60178777',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55e6b0c8921be8_83718301',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6b0c8921be8_83718301')) {
function content_55e6b0c8921be8_83718301 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1179855e6b0c88f6c52_60178777';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo '<?php ';?>echo $page_title; <?php echo '?>';?></title>
<style>
.li{list-style-type:none;margin:15px;float:left;}
</style>
<head>
<body>

   <div style="margin-top:35px;">
     <ul style="display:block;">
         <li class = "li"><a href="index.php?p=kaoqinshebao">社会保险表</a></li>
         <li class = "li"><a href="index.php?p=kaoqinxiaoshi">最低工资表</a></li>
      </ul>
    </div>
    
    <div style="position:absolute;z-index:2;margin-top:-16px;margin-left:940px;" >
   <table class="table" style="width:98%;" >
    <tr>
       <td style="background:#F5F5F5;border:solid 0px #9a9ca0;line-height:1.4em; ">
       插入:是指为当前员工插入一条新记录或批量处理数据。<br>修改:指修改当前员工当前行里的数据。<br>删除:指删除当前员工当前行里的数据。
       </td> 
    </tr>   
   </table>
    </div>      

</body>
</html>   




<?php }
}
?>