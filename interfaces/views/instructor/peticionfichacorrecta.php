<?php
$sql =  $this->ficha->traerFicha($ficha);
while ($row = $sql->fetch(PDO::FETCH_ASSOC)):
?>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="area">Area:</label>
            <select name="area" class="form-control"  id="etapa-formativa" required>
                <?php 
                while ($column = $area->fetch(PDO::FETCH_ASSOC)):
                    if ($column['nombre'] == $row['area']) {
                        ?>
                            <option value="<?=$column['codigo']?>" selected><?=$column['nombre']?></option>
                        <?php
                    }else{
                        ?>
                            <option value="<?=$column['codigo']?>"><?=$column['nombre']?></option>
                        <?php
                    }

                endwhile;
                ?>
            </select>
        </div>
    </div>

    <div class="col-6">

        <div class="form-group">
            <label for="nivel">Nivel:</label>
            <select name="nivel" class="form-control"  id="etapa-formativa" required>
                <?php 
                while ($column = $nivel->fetch(PDO::FETCH_ASSOC)):
                    if ($column['nombre'] == $row['nivel']) {
                        ?>
                            <option value="<?=$column['codigo']?>" selected><?=$column['nombre']?></option>
                        <?php
                    }else{
                        ?>
                            <option value="<?=$column['codigo']?>"><?=$column['nombre']?></option>
                        <?php
                    }

                endwhile;
                ?>

            </select>
        </div>
    </div>
</div>

<div class="row">
    <!-- ETAPA FORMATIVA Y SUS DIFERENTES ETAPAS -->
    <div class="col-6">
        <div class="form-group">
            <label for="etapa-formativa">Etapa formativa:</label>
                <select name="etapaformacion" class="form-control"  id="etapa-formativa" required>
                    <?php 
                    while ($column = $listaetapaformativa->fetch(PDO::FETCH_ASSOC)):
                        if ($column['nombre'] == $row['etaformacion']) {
                            ?>
                                <option value="<?=$column['codigo']?>" selected><?=$column['nombre']?></option>
                            <?php
                        }else{
                            ?>
                                <option value="<?=$column['codigo']?>"><?=$column['nombre']?></option>
                            <?php
                        }

                    endwhile;
                    ?>

                </select>

        </div>
    </div>



    <!-- ETAPA PROYECTO Y SUS DIFERENTES ETAPAS -->
    <div class="col-6">
    <div class="form-group">
            <label for="programa">Programa:</label>
            <select name="programa" class="form-control"  id="etapa-formativa" required>
                <?php 
                while ($column = $programa->fetch(PDO::FETCH_ASSOC)):
                    if ($column['nombre'] == $row['programa']) {
                        ?>
                            <option value="<?=$column['codigo']?>" selected><?=$column['nombre']?></option>
                        <?php
                    }else{
                        ?>
                            <option value="<?=$column['codigo']?>"><?=$column['nombre']?></option>
                        <?php
                    }

                endwhile;
                ?>

            </select>                      
        </div>

    </div>
</div>


<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="hora-inicio">Hora inicio:</label>
            <input type="time" class="form-control" name="horaInicio" id="hora-inicio"required  value="<?= $row['horai'];?>">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="hora-final">Hora fin:</label>
            <input type="time" class="form-control"name="horaFin" id="hora-final"required  value="<?= $row['horaf'];?>">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
    <div class="form-group">
            <label for="municipio">Municipio:</label>
            <select name="municipio" class="form-control"  id="etapa-formativa" required>
                <?php 
                while ($column = $municipio->fetch(PDO::FETCH_ASSOC)):
                    if ($column['nombre'] == $row['municipio']) {
                        ?>
                            <option value="<?=$column['codigo']?>" selected><?=$column['nombre']?></option>
                        <?php
                    }else{
                        ?>
                            <option value="<?=$column['codigo']?>"><?=$column['nombre']?></option>
                        <?php
                    }

                endwhile;
                ?>

            </select>
        </div>

    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="etapa-proyecto">Etapa proyecto:</label>
            <select name="etapaproyecto" class="form-control"  id="etapa-proyecto"required>
                <?php
                while ($column = $listaetapaProyecto->fetch(PDO::FETCH_ASSOC)):
                    if ($column['nombre'] == $row['etapaproyecto']) {
                        ?>
                            <option value="<?=$column['codigo']?>" selected><?=$column['nombre']?></option>
                        <?php
                    }else{
                        ?>
                            <option value="<?=$column['codigo']?>"><?=$column['nombre']?></option>
                        <?php
                        }
                endwhile;
                ?>
            </select>
        </div>
    </div>
</div>

<div class="row">


    <div class="col-6">
        <div class="form-group">
            <label for="formativo">Proyecto formativo:</label>
            <input type="text" class="form-control" id="formativo" name="proyectoFormativo" required value="<?= $row['proformativo']?>">
            <input type="hidden" name="codigoprograma" value="<?= $row['codigoprograma']?>">
        </div>
    </div>


    <div class="col-6">
        <div class="form-group">
            <label for="instructor-lider">Instructor lider:</label>
            <select name="instructor" class="form-control"  id="instructor-lider"required value="<?= $row['lider']?>">
                <?php
                while ($column = $listaequipoInstructores->fetch(PDO::FETCH_ASSOC)):
                    if ($column['nombres'] == $row['lider']) {
                        ?>
                            <option value="<?=$column['documentoInstructor']?>" selected><?=$column['nombres']?></option>
                        <?php
                    }else{
                        ?>
                            <option value="<?=$column['documentoInstructor']?>"><?=$column['nombres']?></option>
                        <?php
                        }
                endwhile;
                ?>

            </select>
        </div>

    </div>

</div>


<div class="row">

    <!-- Coordinador  -->
    <div class="col-6">

        <div class="form-group">
            <label for="coordinador">Coordinador:</label>
            <select name="coordinador" class="form-control"  id="instructor-lider"required value="<?= $row['lider']?>">
                <?php
                while ($column = $coordinador->fetch(PDO::FETCH_ASSOC)):
                    if ($column['nombres'] == $row['NombreCoordinador']) {
                        ?>
                            <option value="<?=$column['docID']?>" selected><?=$column['nombres']?></option>
                        <?php
                    }else{
                        ?>
                            <option value="<?=$column['docID']?>"><?=$column['nombres']?></option>
                        <?php
                        }
                endwhile;
                ?>

            </select>
        </div>

    </div>

    <!-- tipo de falta -->
    <div class="col-6">
        <div class="form-group">
            <label for="tipofalta">Tipo de falta:</label>
            <select name="tipofalta" class="form-control"  id="tipofalta" required>
                <option value="Academica">Academica</option>
                <option value="Diciplinaria">Diciplinaria</option>
            </select>
        </div>
    </div>
</div>


<div class="row">
    <!-- justificacion-->
    <div class="col-6">
        <div class="form-group">
            <label for="justificacion">Justificacion:</label>
            <textarea class="form-control style-textareaficha" name="justificar" id="justificacion" rows="3" required></textarea>
        </div>
    </div>



    <!-- tipocalificacion -->
    <div class="col-6">
        <div class="form-group">
            <label for="tipocalifica">Tipo de Calificacion:</label>
            <select name="tipocalificacion" class="form-control"  id="tipocalifica" required>
            <option value="leve">Leve</option>
            <option value="Grave">Grave</option>
            <option value="Gravisima">Gravisima</option>

            </select>
        </div>
    </div>
</div>

<div class="row">

    <!-- Estudiantes -->
    <div class="col-6">
        <div class="container">
            <label for="">Estudiantes:</label>
            <?php
                $aprendices = $this->peticiones->aprendices($ficha);
                while ($column = $aprendices->fetch(PDO::FETCH_ASSOC)):

                    ?>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?=$column['nombres']?>" name="aprendices[]" value="<?=$column['docId']?>">
                            <label class="custom-control-label" for="<?=$column['nombres']?>"> <?=$column['nombres'].' '.$column['apellidos']?></label>
                        </div>
                    <?php
                endwhile;
            ?>
        </div>
    </div>


    <div class="col-6">
        <!-- sugerencia -->
        <div class="col-12">
            <div class="form-group">
                <label for="Sugerencia">Sugerencia:</label>
                <select name="sugerencia" class="form-control"  id="Sugerencia" >
                    <?php
                        var_dump($sugerencia = $this->peticiones->sugerencias());
                        while ($column = $sugerencia->fetch(PDO::FETCH_ASSOC)):
                            ?>
                                <option value="<?=$column['codigo']?>"><?=$column['nombre']?></option>
                            <?php
                        endwhile;
                    ?>
                </select>
            </div>
        </div>
        <!-- evidencia -->
        <div class="col-12">
            <div class="form-group">
                <label for="evidencia">Evidencia:</label>
                <input type="file"name="evidencia" class="form-control-file" id="evidencia" required>
            </div>
        </div>

        <!-- normas reglamentarias -->
        <div class="col-12">
            <div class="form-group">
                <label for="normasReglamentarias">Normas reglamentarias:</label>
                <textarea class="form-control style-textareaficha" name="normasReglamentarias" id="normasReglamentarias" rows="3" required></textarea>
            </div>
        </div>
    </div>

</div>



<div class="w-100 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary ">Enviar</button>
</div>
<?php endwhile;?>