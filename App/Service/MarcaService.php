<?php
    namespace App\Service;
    use App\Models\MarcaModel;

    class MarcaService
    {
        public function get($marca = null){
            return MarcaModel::pesquisa($marca);
        }
    }
