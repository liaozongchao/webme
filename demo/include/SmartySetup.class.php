<?php
require_once ROOT_PATH.'/libs/Smarty.class.php';
class SmartySetup extends Smarty
{
    function __construct()
    {
        parent::__construct();
        $this->setTemplateDir(TEMPLATE_DIR);
        $this->setCompileDir(COMPILE_DIR);
        $this->setConfigDir(CONFIGS_DIR);
        $this->setCacheDir(CACHE_DIR);
        $this->debugging = DEBUGGING;
        $this->caching = CACHING;
        $this->cache_lifetime = CACHE_LIFETIME;
    }
    
}





