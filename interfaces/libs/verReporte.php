<?php   //required "reportecoordinador.php";
  $id=$_POST['id'];
  $con=mysqli_connect("localhost","root","","proyecto_formativo");
  mysqli_set_charset($con,"utf8");  
  $consulta="SELECT * FROM tblreporte WHERE consecutivo='$id'";
  $result=mysqli_query($con,$consulta);
  echo $id; 

  while($row=mysqli_fetch_array($result)){
        echo "<tr>";    
        echo "<td>".$row['consecutivo']."</td>";
        echo "<td>".$row['numFicha']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['fecha']."</td>";
        //recoger el get y enviarlo href="#exampleModal"
        ?> 
       <td><span class="btn-warning btn-sm " data-toggle="modal" id="gracias" onclick="cargarDato(<?php echo ($row['consecutivo']); ?>)" >
                    <span class="fa fa-pencil-square-o"></span>
        </span></td>
       
              <?php
       //echo "<td><form  method='post'></form><input name='cons' id='hola' type='text' value='".$row['consecutivo']."' hidden><button type='submit'>ver</button></form></td>";
        
       echo "</tr>";
    }
?>