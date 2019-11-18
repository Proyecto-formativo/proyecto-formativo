<?php
require "../controllers/peticionFicha.php";
$ficha = $_POST["numeroficha"];
$base = new peticionficha();
$base->traerinforme($ficha);
?>