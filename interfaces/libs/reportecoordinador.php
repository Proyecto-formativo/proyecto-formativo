<?php 

$id=$_POST['id'];
 //echo ("la solicitud fue correcta , el codigo es jzj".$id);

$con=mysqli_connect("localhost","root","","proyecto_formativo");
  mysqli_set_charset($con,"utf8");
  $consulta="SELECT r.consecutivo, area.nombre as area,r.fecha as fecha,p.nombre as programa,nv.nombre as nivel, af.numFicha as ficha , mu.nombre as municipio,ce.nombre as centro,se.nombre as sede
,ef.nombre as 'etapa de formacion',ep.nombre as 'etapa proyecto',user.nombres as 'instructor lider',r.justificacion
FROM tblreporte AS r INNER JOIN tblaprendicesreportados AS ar
                                ON ar.consReporte=r.consecutivo
                     INNER JOIN tblaprendicesficha as af ON af.docIDAprendiz=ar.docIDAprendiz
                     INNER JOIN tblficha as f ON f.nroFicha=af.numFicha
                     INNER JOIN tblprograma as p ON p.codigo=f.programa
                     INNER JOIN tblarea as area ON p.area = area.codigo
                     INNER JOIN tblnivel as nv ON nv.codigo=p.nivel
                     INNER JOIN tblmunicipio as mu ON mu.codigo=f.municipio
                     INNER JOIN tblcentro as ce ON area.centro=ce.codigo
                     INNER JOIN tblsede as se ON se.centro=ce.codigo
                     INNER JOIN tbletapaformacion as ef ON ef.codigo=f.etapaFormacion
                     INNER JOIN tbletapaproyecto as ep ON ep.codigo=f.etapaProyecto
                     INNER JOIN tblequipoinstructor as ei ON ei.docIDInstructor=f.instructorLider
                     INNER JOIN tblusuario as user ON user.docID=f.instructorLider
 WHERE r.consecutivo = $id 
 GROUP BY r.consecutivo";


  $result=mysqli_query($con,$consulta);


  while($row=mysqli_fetch_array($result)){

        $arrayn[]=$row['consecutivo'];
        $arrayn[]=$row['area'];
        $arrayn[]=$row['fecha'];
        $arrayn[]=$row['programa'];
        $arrayn[]=$row['nivel'];
        $arrayn[]=$row['ficha'];
        $arrayn[]=$row['municipio'];
        $arrayn[]=$row['centro'];
        $arrayn[]=$row['sede'];
        $arrayn[]=$row['etapa de formacion'];
        $arrayn[]=$row['etapa proyecto'];
        $arrayn[]=$row['instructor lider'];
        $arrayn[]=$row['justificacion'];



    }

   mysqli_close($con);
	echo  json_encode( $arrayn);


 ?>