<?php
  //Smarty PHP configuration
  
  define('REAL_PATH', dirname(__FILE__));

  require(REAL_PATH.'/libs/Smarty.class.php');

  $smarty=new Smarty();

  $smarty->setCacheDir(REAL_PATH.'/cache');
  $smarty->setConfigDir(REAL_PATH.'/configs');
  $smarty->setPluginsDir(REAL_PATH.'/libs/plugins'); 
  $smarty->setTemplateDir(REAL_PATH.'/templates');
  $smarty->setCompileDir(REAL_PATH.'/templates_c');

  //添加Smarty自带的插件库
  $smarty->addPluginsDir(REAL_PATH.'/libs/plugins');

  //检测Smarty目录结构配置是否有效
   // $smarty->testInstall();
?>