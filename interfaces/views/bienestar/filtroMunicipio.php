 <div class="row">
 <!-- centro -->
<div class="col-6">
     <div class="form-group">
         <label for="centro">centro:</label>
         <select name="centro" class="form-control"  id="centro" >
         <option value=""><?= $row[2] ?> </option>
         </select>
     </div>
</div>
<!-- Sede -->
<div class="col-6">
     <div class="form-group">
         <label for="Sede">Sede:</label>
         <select name="sede" class="form-control"  id="sede" >
         <?php
         $valores = $dato->peticionSede($valor);
         while ($colum = $valores->fetch(PDO::FETCH_ASSOC)):
            if ($colum['sede'] == $row[1]) {
                ?>
             <option value="<?= $colum['codigo'] ?>" selected><?= $colum['sede'] ?> </option>
        
             <?php
            }else{

                ?>
             <option value="<?= $colum['codigo'] ?>"><?= $colum['sede'] ?> </option>
        
             <?php
            }
         endwhile;
         ?>
         </select>
     </div>
</div>
</div>