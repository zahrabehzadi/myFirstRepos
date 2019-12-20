<?php

include_once (__DIR__.'/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__.'/templates');
$smarty->setCompileDir(__DIR__.'/templates_c');