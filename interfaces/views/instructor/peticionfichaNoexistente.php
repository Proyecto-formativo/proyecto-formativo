<div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="area">Area:</label>
                            <input type="text" class="form-control" name="area" id="area"required >

                        </div>
                    </div>

                    <div class="col-6">

                        <div class="form-group">
                            <label for="nivel">Nivel:</label>
                            <input type="text" class="form-control" name="nivel" id="nivel"required >

                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- ETAPA FORMATIVA Y SUS DIFERENTES ETAPAS -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="etapa-formativa">Etapa formativa:</label>
                            <input type="text" class="form-control" name="etapaformacion" id="etapa-formativa"required >
                        </div>
                    </div>



                    <!-- ETAPA PROYECTO Y SUS DIFERENTES ETAPAS -->
                    <div class="col-6">
                    <div class="form-group">
                            <label for="programa">Programa:</label>
                            <input type="text" class="form-control" name="programa" id="programa"required >
                            
                                                 
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hora-inicio">Hora inicio:</label>
                            <input type="text" class="form-control" name="horaInicio" id="hora-inicio"required  >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hora-final">Hora fin:</label>
                            <input type="text" class="form-control"name="horaFin" id="hora-final"required  >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                            <label for="municipio">Municipio:</label>
                            <input type="text" class="form-control"name="municipio" id="municipio"required  >
                            
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="etapa-proyecto">Etapa proyecto:</label>
                            <input type="text" class="form-control"name="etapaproyecto" id="etapa-proyecto"required  >
                            
                        </div>
                    </div>
                </div>

                <div class="row">


                    <div class="col-6">
                        <div class="form-group">
                            <label for="formativo">Proyecto formativo:</label>
                            <input type="text" class="form-control" id="formativo" name="proyectoFormativo" required >
                            <input type="hidden" name="codigoprograma" >
                        </div>
                    </div>


                    <div class="col-6">
                        <div class="form-group">
                            <label for="instructor-lider">Instructor lider:</label>
                            <input type="text" class="form-control"name="instructor" id="instructor-lider"required  >
                        </div>
                    </div>

                </div>


                <div class="row">

                    <!-- Coordinador  -->
                    <div class="col-6">

                        <div class="form-group">
                            <label for="coordinador">Coordinador:</label>
                            <input type="text" class="form-control"name="coordinador" id="coordinador"required>
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



            <div class="w-100 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary ">Enviar</button>
            </div>