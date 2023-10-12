<?php
    namespace App\Models;

    class Marca{

        private static $marca='marca';
        public static function get(string $marca){
            try {
                $json = file_get_contents('https://parallelum.com.br/fipe/api/v1/carros/marcas/');
            } catch (\Exception $e) {
                throw new \Exception("Houve um erro ao consultar a API.");
                exit();
            }

            $obj = json_decode($json);
            echo $obj->access_token;
        }
    }