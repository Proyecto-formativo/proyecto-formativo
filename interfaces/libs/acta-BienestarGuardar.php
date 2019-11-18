<?php 

// <?php
// require "../controllers/peticionFicha.php";
// $ficha = $_POST["numeroficha"];
// $base = new DB();
// $base->traerinforme($ficha);
// 
require "../controllers/conectar.php";
 $municipio=$_POST['municipio'];
 $fecha=$_POST['fecha'];
 $centro=$_POST['centro'];
 $sede=$_POST['sede'];
 $horaInicio=$_POST['hora-inicio'];
 $horaFin=$_POST['hora-fin'];
 $temas=$_POST['temas'];
 $area=$_POST['area'];
 $objetivos=$_POST['objetivos'];
 $temasTratar=$_POST['temasTratar'];
 $desarollo=$_POST['desarollo'];
 $descargosAprendiz=$_POST['descargos-Aprendiz'];
 $conclusiones=$_POST['conclusiones'];
 $recomendaciones=$_POST['recomendaciones'];
 $asistentes=$_POST['asistentes'];
 $invitados=$_POST['invitados'];

 $sql = "INSERT INTO  datos VALUES('$municipio',
                                   '$fecha',
                                   '$horaInicio',
                                   '$horaFin',
                                   '$sede',
                                   '$temas',
                                   '$area',
                                   '$objetivos',
                                   '$temasTratar',
                                   '$desarollo',
                                   '$conclusiones',
                                   '$asistentes',
                                   '$invitados')";
//Ejecutamos la sentencia
$ejecuta = mysql_query($sql);
//Verificar ejecución
if (!$ejecuta) {
    echo"Hubo algun error";
}else {
    echo"Datos Guardados Corectamente<br><a href='bienestar.php>Volver</a>";
}

?>