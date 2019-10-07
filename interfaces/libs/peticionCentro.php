<?php
require('../controllers/centros.php');

$valor = $_POST['centro'];
// echo $valor;
$dato = new centros();
$valores = $dato->filtro_municipio($valor);