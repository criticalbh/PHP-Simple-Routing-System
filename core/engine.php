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
$arg0=null; $arg1=null; $arg2 = null;
if(isset($command[0])){
    $arg0=$command[0];
}
if(isset($command[1])){
    $arg1='/'.$command[1].'/';
}
if(isset($command[2])){
    $arg2=$command[2];
}
$url = $arg0.$arg1.$arg2;

if($url == ''){
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