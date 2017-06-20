<?php
spl_autoload_register(function($class){
    $class = str_replace("\\", "/", $class);
    require_once $class.".php";
});
$selfFolder= str_replace("index.php","",$_SERVER["PHP_SELF"]);

$uri = str_replace($selfFolder,"",$_SERVER["REQUEST_URI"]);

$uriParts=explode("/",$uri);
$controllerName = array_shift($uriParts);
$actionName= array_shift($uriParts);
if(!$actionName)
{
    $actionName="index";
}
$controllerFullName="Controllers\\".ucfirst($controllerName)."Controller";

$controller =new $controllerFullName();
$refM= new ReflectionMethod($controller,$actionName);
$args =[];
foreach($refM->getParameters() as $parameter){
    if($parameter->getClass()==null){
        continue;
    }
    $className=$parameter->getClass()->getName();
    $obj= new $className();
    foreach ($_POST as $paramName => $value){
        $property=$parameter->getClass()->getProperty($paramName);
        $property->setAccessible(true);
        $property->setValue($obj,$value);
    }
    $position=$parameter->getPosition();
    array_splice($uriParts,$position,0,[$obj]);

}

call_user_func_array([$controller,$actionName],$uriParts);

