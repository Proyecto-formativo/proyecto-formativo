<?php
class peticionesFicha {
    public function __construct(){
        $conectar = new conexion();
        $this->conect = $conectar->getdb();
    }
    public function listaetapaformativa(){
        
        $listaetapaformativa = $this->conect->query( "SELECT * FROM tbletapaformacion");
        return $listaetapaformativa;
    }

    public function listaetapaProyecto(){
        
        $listaetapaProyecto = $this->conect->query( "SELECT * FROM tbletapaproyecto");
        return $listaetapaProyecto;
    }

    public function listaequipoInstructores($ficha){
        
        $listaequipoInstructores =  $this->conect->query( "SELECT CONCAT(u.nombres,' ',u.apellidos) as nombres,e.docidinstructor as documentoInstructor, e.numficha from tblequipoinstructor as e inner join tblusuario as u on u.docid = e.docidinstructor where numficha = '$ficha' ");
        return $listaequipoInstructores;
    }

    public function area(){
    
        $area =  $this->conect->query("SELECT * from tblarea");
        return $area;
    }

    public function nivel(){

        $nivel =  $this->conect->query("SELECT * from tblnivel");
        return $nivel;
    }

    public function programa(){
    
        $programa =  $this->conect->query("SELECT * from tblprograma");
        return $programa;        
    }

    public function municipio(){
        
        $municipio =  $this->conect->query("SELECT * from tblmunicipio");
        return $municipio;        
    }

    public function coordinador(){
        
        $coordinador =  $this->conect->query("SELECT * from tblusuario where perfil = 2");
        return $coordinador;
    }

    public function sugerencias(){
        
        $sugerencia =  $this->conect->query("SELECT * from tblsugerencia");
        return $sugerencia;
    }
    public function aprendices($ficha){
        $aprendices = $this->conect->query("SELECT u.docId,u.nombres, u.apellidos,af.numFicha from tblaprendicesficha as af inner join tblusuario as u on u.docID = af.docIDaprendiz where numficha = $ficha");
        return $aprendices;        
    }

}