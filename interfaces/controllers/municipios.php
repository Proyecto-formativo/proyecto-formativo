<?php
require('../model/municipio.php');

class municipios extends municipio{

    public function listar_municipios(){
        parent::mostrarmunicipios();
    }

    public function filtro_municipio($dato)
    {
        return parent::peticionMunicipio($dato);
    }
}