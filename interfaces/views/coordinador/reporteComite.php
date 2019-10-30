
<div class="style-float">
    <div class="container">
        <div class="row">
        <div class="col-xs-12" id="pp" style="display:none" >
         <?php 
         
         ?>
        </div>
            <div class="col-xs-12"  id="ventanilla">
                <!-- tu tabla aquí siempre se verá al 100% en todas las resolcuiones-->
           
                <table class="table table-responsive " name="tab" style="<?php  //if(!empty($_GET['c'])){echo "display:none;";}else{ }?>">
                    <thead class="thead-dark"> 
                        <tr>
                            <th name="numrep">N. REPORTE </th>
                            <th> FICHA </th>
                            <th>PROGRAMA DE FORMACION </th>
                            <th> FECHA </th>
                            <th> VER REPORTE </th>
                        </tr>
                    </thead>
                    <tbody id="tbody"> 
                        <?php  require "consultarReportesHechos.php";?>
                    
                    </tbody>
                   
                </table>
                 
                <!-- tabla para mostrar el ver de la anterior-->
            
                </table>
             
        
            </div>
         </div>
        
        
    </div>
  
</div>


   