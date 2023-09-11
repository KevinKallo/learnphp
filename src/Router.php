<?
namespace App;
class Router {
public static $routes = [];
public $path;

public function __construct($path){
    $this ->path = $path;
}

public function match(){
    foreach(self::$routes as $route){
        if(strtolower($route['path']) === strtolower($this -> path)){
            return $route;
        }
    }
    return false;

}

public static function addRoute($path, $action){
    self::$routes[] = [ 
        'path' => $path,
        'action' => $action
        ];
    }   

}
