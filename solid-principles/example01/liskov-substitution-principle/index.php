<?php

spl_autoload_register(function($class_name){
    include $class_name.'.php';
});


echo (new Lists())->showData('demo data');
