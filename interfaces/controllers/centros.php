<?php
require('../model/centro.php');

class centros extends centro{

    public function listar_centros(){
        parent::mostrarcentros();
    }
}