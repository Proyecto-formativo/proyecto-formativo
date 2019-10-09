<?php
require('../controllers/municipios.php');
$municipio = new municipios();
$municipios = $municipio->mostrarmunicipios();




require('../controllers/areas.php');
$area = new areas();
$areas = $area->listar_areas();


date_default_timezone_set('America/Bogota');
?>
<div class="style-float">
    <div class="container">
        <form action="libs/enviarFicha.php" method="post">

        <!-- Row 1 -->
        <div class="row">
                <!-- municipio -->
            <div class="col-6">
                <div class="form-group">
                    <label for="municipio">Municipio:</label>
                        <select name="municipio" class="form-control"  id="municipio" required >
                            <option value="0">Seleccionar Municipio</option>     
                                <?php  while ($row = $municipios->fetch(PDO::FETCH_ASSOC)) {
                                ?>

                                <option value="<?php echo $row['codigo'] ?>"><?php echo $row['nombre'] ?></option>     
                                
                                <?php }  ?>

                        </select>
                    <!-- pattern="[A-Za-z]{3}" --> 
                </div>
            </div>
                <!-- Fecha -->
            <div class="col-6">
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="text" class="form-control" id="fecha" name="date"  value="<?= date("d")."-".date("m")."-".date("Y");?>" disabled >
                </div>
            </div>

        </div>


            <div class="infoCentroSede">
             <!-- Row 2 -->
            
             <div class="row">
                    <!-- centro -->
                <div class="col-6">
                        <div class="form-group">
                            <label for="centro">centro:</label>
                            <select name="centro" class="form-control"  id="centro" >
                                <option value="0">Seleccionar centro</option>     
                                    <?php  while ($row = $municipios->fetch(PDO::FETCH_ASSOC)) {
                                    ?>

                                <option value="<?php echo $row['codigo'] ?>"><?php echo $row['nombre'] ?></option>     
                                
                                    <?php }  ?>
                            </select>
                        </div>
                </div>
                <!-- Sede -->
                <div class="col-6">
                        <div class="form-group">
                            <label for="Sede">Sede:</label>
                            <select name="sede" class="form-control"  id="sede" >
                            </select>
                        </div>
                </div>
            </div>
            </div>                      
                 <!-- Row 3 -->
                 <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hora-inicio">hora inicio:</label>
                            <input type="time" name="hora-inicio"class="form-control" id="hora-inicio" value="<?= date('h:i:s')?>" required disabled>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hora-inicio">hora Fin:</label>
                            <input type="time" name="hora-fin"class="form-control" id="hora-fin" value="<?= date('h:i:s')?>" required>
                        </div>
                    </div>

                </div>

            <!-- Row 4 -->
            <div class="row">
                        <!--  Temas -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="temas">temas:</label>
                            <input type="text" class="form-control" id="area"  value="Comité de Evaluación y Seguimiento" required disabled>                                  
                        </div>
                    </div>
                 <!-- Área -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Area">Area:</label>
                            <select name="municipio" class="form-control"  id="municipio" required >
                            <option value="0">Seleccionar area</option>     
                                <?php  while ($row = $areas->fetch(PDO::FETCH_ASSOC)) {
                                ?>

                                <option value="<?php echo $row['codigo'] ?>"><?php echo $row['nombre'] ?></option>     
                                
                                <?php }  ?>

                        </select>
                            <!-- <input type="text" class="form-control" id="area" value="Área Gestión y Desarrollo Empresarial" required> -->
                        </div>
                    </div>
            </div>


        <!-- Row 5 -->
                <div class="row">
                <!-- Objetivos Reunión -->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="Objetivos">Objetivos De La Reunión:</label>
                            <!-- <input type="text"name="Objetivos" class="form-control" id="Objetivos"  required> -->
                            <textarea disabled class="form-control style-textareaficha" name="ObjetivosReunion" id="objetivos" cols="20" rows="">Analizar los informes académicos y disciplinarios de los aprendices que fueron citados al Comité, y realizar las recomendaciones al Subdirector.</textarea>
                        </div>
                    </div>
                </div>
            <div class="titulo-desarrollo mb-4" align="center" p-5>
            <h2>Desarrollo De la Reunión</h2>
            </div>

        <!-- Row 6 -->
                <div class="row">
                    <!-- Temas a Tratar -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Temas-a-tratar">Temas A Tratar:</label>
                            <textarea disabled class="form-control style-textareaficha-bienestar" name="Temas-a-Tratar" id="temasTratar" cols="100" rows="">a. Presentación de Asistentes al Comité.
b. Verificación Quórum, teniendo en cuenta Capitulo 10 “PROCEDIMIENTO PARA LA APLICACIÓN DE SANCIONES”, Art. 32 Reglamento del Aprendiz SENA.
c. Exposición de informes y descargos de cada uno de los aprendices del área GESTIÓN Y
DESARROLLO EMRESARIAL
d. Proposiciones y varios.</textarea>
                        </div>
                    </div>

                    <!-- Desarrollo -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Desarrollo-reunion">Desarrollo:</label>
                            <textarea disabled class="form-control style-textareaficha-bienestar" name="Desarrollo" id="desarollo" cols="20" rows="">a. Se realizó presentación por cada uno de los asistentes al Comité de Evaluación y
seguimiento, conformado por:
Coordinador Académico: Luis Ubeimar Valencia
Líder de Bienestar: Silvana Castrillón
Trabajador Social Bienestar al Aprendiz: Mauricio Peláez
Vocero Representante de los Aprendices: Adriana Echeverri
instructor (es) del programa y aprendices citados.
b. Se verifica si hay quórum, para el desarrollo del Comité, ajustándonos al Reglamento del
Aprendiz SENA, punto que queda aprobado.
c. Se da informe de los aprendices citados a Comité de Evaluación.</textarea>
                        </div>
                    </div>
                </div>

        <!-- Row 7 -->
                <div class="row">
                    <!-- Descargos Aprendiz -->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="descargos-Aprendiz">Descargos Aprendiz:</label>
                            <textarea class="form-control style-textareaficha-bienestar" name="descargos-Aprendiz" id="descargos-Aprendiz" cols="20" rows=""></textarea>
                        </div>
                    </div>

                </div>

        <!-- Row 8 -->
                <div class="row">
                    <!-- Conclusiones -->
                    <div class="col-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Conclusiones:</label>
                                <textarea class="form-control style-textareaficha-bienestarho2" id="conclusiones" rows="3" cols="10">Realizar entrega del plan de mejora desde lo académico y actitudinal con el respectivo acompañamiento a los aprendices citados. Reportar oportunamente el cumplimiento del plan de mejora.</textarea>
                            </div>
                    </div>
                </div>

        <!-- Row 9 -->
                <div class="row">

                <!-- Recomendaciones -->
                <div class="col-12">
                            <div class="form-group">
                                <label for="recomendaciones">Recomendaciones:</label>
                                <select class="form-control" name="recomendaciones" id="recomendaciones">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                    </div>
                </div>

        <!-- Row 10 -->
                <div class="row">

                    <!-- Nombre Asistentes -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Asistentes">Nombres Asistentes:</label>
                            <input type="file"name="evidencia" class="form-control-file" id="asistentes" required>
                        </div>
                    </div>

                     <!-- Nombre Invitados -->
                     <div class="col-6">
                        <div class="form-group">
                            <label for="Invitados">Nombres Invitados:</label>
                            <input type="file"name="evidencia" class="form-control-file" id="invitados" required>
                        </div>
                    </div>
                </div>


                <div class="titulo-desarrollo mb-4 mt-4" align="center" p-5>
                    <!-- <h2>Compromisos</h2> -->
                
                 
                <!-- Ventana Modal -->
                    
                        <button type="button" class="btn bg-success text-white" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">AÑADIR COMPROMISOS</button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Compromisos</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <div class="modal-body">
                                            <form method="POST" action="listarCompromisos.php">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="Actividad">actividad</label>
                                                        <textarea class="form-control" name="Actividad" id="actividad" cols="20" rows=""></textarea>
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <div class="col-6">
                                                        <label for="Responsable">Responsable</label>
                                                            <input class="form-control" type="text" id="responsable">
                                                    </div>

                                                    <div class="col-6">
                                                        <label for="Fecha">Fecha Compromiso</label>
                                                        <input class="form-control" type="date" id="fecha-compromiso">
                                                    </div>
                                                </div>
                                                <div class="w-100 d-flex justify-content-center mb-5">
                                                    <input type="button" class="btn btn-success" id="FormularioCompromisos" value="Agregar Compromiso" >
                                                    <!-- <button type="submit" class="FormularioCompromisos" >enviar</button> -->
                                                </div>
                                             </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
               

                <div id="listar-compromisos">
                    <table class="table table-striped table-black">
                            <thead>
                                <tr class="bg-success text-white">
                                    <th scope="col">#</th>
                                    <th scope="col">Actividad</th>
                                    <th scope="col">Responsable</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Evaluación</td>
                                    <td>Luisa</td>
                                    <td>03/10/2019</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>04/10/2019</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>09/10/2019</td>
                                </tr>
                            </tbody>
                    </table>
                </div>


                <div class="w-100 d-flex justify-content-center  mt-5 mb-5">
                    <button type="submit" class="btn btn bg-success text-white">Enviar Reporte</button>
                </div>

        </form>
    </div>
</div>
