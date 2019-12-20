<?php
function loadModel($class) {
    $path = __DIR__ . '/../models/';
    require_once $path . $class .'.php';
}


spl_autoload_register('loadModel');
