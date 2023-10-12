<?php
    //implementar segurança jwt
    require_once '../vendor/autoload.php';


    // marca
    $marca = $_GET['marca'];
    if (isset($marca)) {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $service=$marca.'Service';
        try{
            call_user_func_array(array(new $service, $method));
        }catch (\Exception $e){

        }
        echo $marca;
    }