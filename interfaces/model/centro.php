<?php  

require('conexion.php');

class centro extends conexion {
    public function mostrarcenetros(){
        self::getdb();
        $sql = $this->getdb()->prepare("SELECT * from tblcentro ORDER BY nombre");
        $sql->execute();
        return $sql;
    }
}


?>