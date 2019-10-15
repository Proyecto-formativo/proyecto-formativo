<?php
require('../controllers/municipios.php');

$valor = $_POST['municipio'];
//echo $valor;
$dato = new municipios();
$valores = $dato->filtro_municipio($valor);

while ($row = $valores->fetch(PDO::FETCH_NUM)) {
    require('../views/bienestar/filtroMunicipio.php');
}