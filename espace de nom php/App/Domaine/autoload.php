<?php
    spl_autoload_register(function($fqcn){

        $path = str_replace(['src','\\'],['App','/'],$fqcn).'.php';
        require($path);
    });