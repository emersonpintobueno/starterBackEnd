<?php

    //implementar segurança jwt
    require_once '../vendor/autoload.php';
    use App\Service\MarcaService;

    // marca

    if (isset($_GET['marca'])){
        $marca = $_GET['marca'];
    }else{
        $marca="";
    }

    if (!empty($marca)) {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        //$service=$marca.'Service';
        $retorno = call_user_func(array(new MarcaService, $method),$marca);

        ?><pre><?php
            echo $retorno;
        ?></pre><?php

    }else{
        ?><pre><?php
        http_response_code(400);
        echo json_encode(['error'=>'Marca não informada'], JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
        ?></pre><?php
    }