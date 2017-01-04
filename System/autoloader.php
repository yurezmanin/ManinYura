<?php

spl_autoload_register(function ($className) {
    $file = str_replace('\\', '/', $className) . '.php';
    include_once $file;
});