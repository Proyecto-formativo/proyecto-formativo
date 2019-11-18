<?php
require '../model/ficha.php';
require '../model/peticionesFicha.php';
class peticionficha {
    function __construct(){
        $this->ficha =  new ficha();
        $this->peticiones = new peticionesFicha();
    }

    public function traerinforme($ficha){
        $listaetapaformativa = $this->peticiones->listaetapaformativa();
        $listaetapaProyecto =$this->peticiones->listaetapaProyecto();
        $listaequipoInstructores = $this->peticiones->listaequipoInstructores($ficha);
        $area =$this->peticiones->area();
        $nivel = $this->peticiones->nivel();
        $programa = $this->peticiones->programa();
        $municipio = $this->peticiones->municipio();
        $coordinador = $this->peticiones->coordinador();
        
        
        $valor = $this->ficha->traerFicha($ficha)->rowCount();
        if ( $valor > 0){
            require_once "../views/instructor/peticionfichacorrecta.php";
        }else{
            require "../views/instructor/peticionfichaNoexistente.php";
        }
    }
}
?>

