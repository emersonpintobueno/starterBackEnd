<?php
    namespace App\Models;

    class MarcaModel{

        //private static $marca='marca';
        public static function pesquisa(string $marca): bool|string
        {
            try {
                $resultado=array();
                $json = file_get_contents('https://parallelum.com.br/fipe/api/v1/carros/marcas/');
                $dado = json_decode($json, true);
                $found=false;
                if ($dado){
                    foreach ($dado as $item){
                        if (isset($item['nome']) && strcasecmp($item['nome'], $marca) === 0){
                            $resultado[]=array(
                                'codigo'=>$item['codigo'],
                                'nome'=>$item['nome']
                            );
                            $found=true;
                        }
                    }
                    if($found){
                        http_response_code(200);
                        return json_encode(['data'=>$resultado], JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
                    }else{
                        http_response_code(400);
                        return json_encode(['error'=>'Marca inexistente'], JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
                    }
                }
            } catch (\Exception $e) {
                ?><pre><?php
                    http_response_code(500);
                    echo json_encode(['error'=>' Erro de comunicação com a API'], JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
                ?></pre><?php
                exit();
            }
            return json_encode(['error'=>' Erro de comunicação com a API'], JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
        }
    }