<?php

class  Router{
    
    static $routes = array();

    public static function add($link, $url, $as = null){
        self::$routes[] = [
            'link'  =>  $link, 
            'url'   =>  $url,
            'as'    =>  $as
                ];
    }
    public static function getArray(){
        return self::$routes;
    }
    public static function name($input){
        foreach (self::$routes as $r){
            if($input == $r['as'] || $input == $r['link']){
                echo $r['link'];
                break;
            }
        }
    }
}
