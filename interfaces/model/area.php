<?php  

//require('conexion.php');

class area extends conexion{

    public function mostrarareas(){
        self::getdb();
        $sql = $this->getdb()->prepare("SELECT * from tblarea ORDER BY nombre");
        // $listarAreas =$this->getdb()->query( "SELECT * from tblarea ORDER BY nombre");
        $sql->execute();
        // $listarAreas->execute();

        return $sql;
    }
}