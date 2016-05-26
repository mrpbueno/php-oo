<?php

function getPath()
{
    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    return explode('/',$url['path']);
}

function validaRota($path, $rotas)
{
    if(in_array($path,$rotas)){
        return require_once("pages/{$path}.php");
    }
    else {
        return require_once("pages/404.php");
    }
}
