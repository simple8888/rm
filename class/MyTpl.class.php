<?php
    
    class MyTpl extends Smarty{

       function __construct()
        {
           parent::__construct();
           $this->setTemplateDir("templates");
           $this->setCompileDir("templates_c");
           $this->setConfigDir("configs");
           $this->setCacheDir("cache");

           $this->caching=Smarty::CACHING_OFF;   //const CACHING_OFF = 0;const CACHING_LIFETIME_CURRENT = 1;const CACHING_LIFETIME_SAVED = 2;
           $this->setCacheLifetime(60*60);
           
           //$this->assign("app_name","Guest Book"); //没什么用

           //$this->setLeftDelimiter("<{");//有用
           //$this->setRightDelimiter("}>"); //有用
         }   
}
?>