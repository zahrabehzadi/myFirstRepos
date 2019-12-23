<?php
require __DIR__.'/../libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir = __DIR__.'/../templates/';
$smarty->compile_dir  = __DIR__.'/../templates_c/';
return $smarty;
