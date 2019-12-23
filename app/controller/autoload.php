<?php


spl_autoload_register( function ($class) {

$sources = array(__DIR__."/../models/$class.php",__DIR__."/$class.php " );

foreach ($sources as $source) {
if (file_exists($source)) {
require_once $source;
}
else{
    return false;
}
}
});
