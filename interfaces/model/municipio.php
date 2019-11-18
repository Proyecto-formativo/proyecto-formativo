<?php  

require('conexion.php');

class municipio extends conexion {
    public function mostrarmunicipios(){
        self::getdb();
        $sql = $this->getdb()->prepare("SELECT * from tblmunicipio ORDER BY nombre");
        $sql->execute();
        return $sql;
    }
    public function peticionMunicipio($dato)
    {
        self::getdb();
        $sql = $this->getdb()->prepare("SELECT m.nombre as 'municipio', s.nombre as 'sede', c.nombre as 'centro' from tblcentro as c inner join tblsede as s on c.codigo = s.centro inner join tblmunicipio as m on s.municipio = m.codigo WHERE s.municipio = :dato");
        $sql->execute(['dato'=>$dato]);
        return $sql;
    }
    
    public function peticionSede($dato)
    {
        self::getdb();
        $sql = $this->getdb()->prepare("SELECT s.codigo as codigo,s.nombre AS sede FROM tblsede  AS s  WHERE s.municipio = :dato");
        $sql->execute(['dato'=>$dato]);
        return $sql;
    }
}


?>