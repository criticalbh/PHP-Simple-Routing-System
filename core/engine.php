<?php

include_once('Router.php');
include_once('routes.php');

$configs = include('config.php');



$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);

for ($i= 0; $i < sizeof($scriptName); $i++)
{
    if ($requestURI[$i] == $scriptName[$i])
    {
        unset($requestURI[$i]);
    }
}

$command = array_values($requestURI);

$url = '/'.implode('/',$command).'/';

if($url == '//'){
    include_once($configs['pages'].'/'.$configs['home']);
    return;
}

$routes = Router::getArray();
foreach ($routes as $route) {
    if($url == $route['link']){
        include_once($configs['pages'].'/'.$route['url']);
        return;
    } 
}
include_once('handler/'.$configs['handler']);
