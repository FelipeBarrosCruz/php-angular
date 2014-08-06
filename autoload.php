<?php
spl_autoload_register('load_main_components');

function load_main_components($instance)
{
    if(file_exists($filePath = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $instance) . '.php'));
    {
        require_once ($filePath);
    }
}