<?php
require '../model/conexion.php';


 class conectar{ 
   public function __construct(){
     $conectar = new conexion();
     $this->db = $conectar->getdb();
   }
     public function validarUsuario($documento,$pasword){
      parent::ingresoUsuario($documento,$pasword);
     }


      //actualizacion de la ficha que sera citada
     public function actualizarFicha($ficha,$etapaformativa,$etapaproyecto,$programa,$horaInicio,$horaFin,$municipio,$instructor){
       $sql =  $this->db->query("UPDATE tblficha
       set programa = '$programa',
       municipio = '$municipio',
       horaInicio = '$horaInicio',
       horaFin = '$horaFin',
       etapaFormacion = $etapaformativa,
       etapaProyecto = $etapaproyecto,
       instructorLider = '$instructor'
       where nroficha = '$ficha'");
     }

     public function actualizarPrograma($area,$nivel,$proyectoFormativo,$codigoprograma){
      $sql =  $this->db->query("UPDATE tblprograma
      set 
      area = '$area',
      nivel = $nivel,
      proyectoFormativo ='$proyectoFormativo'
      where codigo = '$codigoprograma' ");
     }


     //ingreso de reporte
     public function ingresarReporte($justificacion,$instructorReporte,$evidencia,$normasReglamentarias,$coordinador,$tipofalta,$tipoCalificcion,$sugerencia){

      $sql =  $this->db->query("INSERT INTO tblreporte value(null,current_date() ,' $justificacion ',$instructorReporte,'$evidencia ',' $normasReglamentarias',$coordinador,'$tipofalta',' $tipoCalificcion',$sugerencia)");
      // $sql->execute([]);
     }

     //ingreso de aprendices
     public function IngresarAprendices($documentoficha){
      $sql =  $this->db->query("SELECT * from tblreporte
      order by consecutivo desc
      limit 1 ");
      while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {

        $insertarAprendices =  $this->db->prepare("INSERT INTO tblaprendicesreportados value(null,:conse,:documentoaprendiz)");
        $insertarAprendices->execute(["conse" =>$row['consecutivo'],"documentoaprendiz" =>$documentoficha]);
      }

     }


     public function mostrarPerfil($documento){
      $sql =  $this->db->prepare("SELECT u.nombres, u.apellidos,u.correoCorporativo,u.telefonoMovil,a.clave from tblusuario as u inner join tblacceso as a on u.docID = a.docIDUsuario where u.docID =  :documento");
      $sql->execute(["documento"=>$documento]);
      return $sql;
    }

    public function modificarPerfil($documento,$nombre,$Apellido,$Correo,$Celular,$password){
      $sql =  $this->db->prepare("UPDATE tblusuario set nombres = ?,apellidos = ?, correoCorporativo = ?, telefonoMovil = ? WHERE docID = ?");
      $sql->execute([$nombre,$Apellido,$Correo,$Celular,$documento]);

      $sql =  $this->db->prepare("UPDATE tblacceso set clave = ? WHERE docIDUsuario = ?");
      $sql->execute([$password,$documento]);
    }
 }


?>