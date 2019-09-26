<div class="style-float">
Aprendices Citados Por Ficha Y Program
</div>

<?php 
$query="SELECT af.numFicha,p.nombre,r.fecha,r.consecutivo,af.docIDAprendiz,u.nombres
 FROM tblreporte AS r INNER JOIN tblaprendicesreportados AS ar ON ar.consReporte=r.consecutivo
  INNER JOIN tblaprendicesficha as af ON af.docIDAprendiz=ar.docIDAprendiz 
  INNER JOIN tblficha as f ON f.nroFicha=af.numFicha
   INNER JOIN tblprograma as p ON p.codigo=f.programa
    inner join tblusuario as u on af.docIDAprendiz=u.docID 
    order by f.nroFicha";


?>