<?php 
session_start();
if (!empty($_POST['justificar']) && !empty($_POST['evidencia']) && !empty($_POST['ficha']) && !empty($_POST['sugerencia']) && !empty($_POST['aprendices']) && !empty($_POST['proyectoFormativo']) ) {
    # code...
    require "../controllers/conectar.php";

    $IngresoDeDatos = new conectar();
    //datos de la ficha en caso de ser modificados
    $ficha =$_POST['ficha'];
   
    $etapaformativa = $_POST['etapaformacion'];
    $etapaproyecto = $_POST['etapaproyecto'];
    $programa = $_POST['programa'];
    $horaInicio = $_POST['horaInicio'];
    $horaFin = $_POST['horaFin'];
    $municipio = $_POST['municipio'];
    $instructor = $_POST['instructor'];
    
    $IngresoDeDatos->actualizarFicha($ficha,$etapaformativa,$etapaproyecto,$programa,$horaInicio,$horaFin,$municipio,$instructor);
    
    
    //se actualiza la informacion de programa
    $area = $_POST['area'];
    $nivel = $_POST['nivel'];
    $proyectoFormativo = $_POST['proyectoFormativo'];
    $codigoprograma = $_POST['codigoprograma'];


    $IngresoDeDatos->actualizarPrograma($area,$nivel,$proyectoFormativo,$codigoprograma);
    

    //ingreso del reporte se insertaran datos en la tabla de los reportes
    $justificacion = $_POST['justificar'];
    $instructorReporte = $_SESSION['documento'];
    $evidencia = $_POST['evidencia'];
    $normasReglamentarias = $_POST['normasReglamentarias'];
    $coordinador = $_POST['coordinador'];
    $tipofalta = $_POST['tipofalta'];
    $tipoCalificcion = $_POST['tipocalificacion'];
    $sugerencia = $_POST['sugerencia'];

    $IngresoDeDatos->ingresarReporte($justificacion,$instructorReporte,$evidencia,$normasReglamentarias,$coordinador,$tipofalta,$tipoCalificcion,$sugerencia);


    //aprendices que seran citados
    $aprendices = $_POST['aprendices'];
    foreach ($aprendices as $key => $value) {
        $IngresoDeDatos->IngresarAprendices($value);
    }


    header('location:../instructor.php');
}else{
    $_SESSION['mensaje2'] = "error no se pueden datos vacio";
    header('location:../instructor.php');
}
