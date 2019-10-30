
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" style="width: 100%">
    <div class="modal-content">
      <div class="modal-header" style="background:#d39e00;" >
        <h5 class="modal-title" id="exampleModalLabel"> 
          Reporte N°<input type="text" name="conse" id="areau"  readonly="readonly" ></h5><br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="comte" style="background: #249784 ">




        <div class="row">
              <div class="col-4" style="padding:0;">
                 <input type="text" name="tarea" value="AREA"  class="areal" style="width:100%; text-align:center;"  readonly="readonly">
              </div>
              <div class="col-4"style="padding:0;" >
                <input type="text" name="area"   id="areados" style="width:100%;"  readonly="readonly">
              </div>
              <div class="col-2" style="padding:0;">
                <input type="text" name="consecut" value="FECHA"  class="areal"  style="width:100%; text-align:center;" readonly="readonly" >
              </div>
              <div class="col-2" style="padding:0;">
                <input type="text" name="fecha" value=""  id="fecha" style="width:100%;"  readonly="readonly">
              </div>

        </div>
        <div class="row">
              <div class="col-4" style="padding:0;">
                  <input type="text" name="consecut" value="PROGRAMA"  class="areal"  style="width:100%; text-align:center;"   readonly="readonly">
              </div>
              <div class="col-8"style="padding:0;" >
                <input type="text" name="programa" value=""  id="programa" style="width:100%;"  readonly="readonly">
              </div>
              <div class="col-2" style="padding:0;">
                <input type="text" name="consecut" value="NIVEL"  class="areal"  style="width:100%; text-align:center;"   readonly="readonly">
              </div>
              <div class="col-2" style="padding:0;">
                <input type="text" name="nivel" value=""  id="nivel" style="width:100%;"   readonly="readonly">
              </div>


              <div class="col-2" style="padding:0;">
                <input type="text" name="consecut" value="FICHA" class="areal"  style="width:100%; text-align:center;"   readonly="readonly">
              </div>
             <div class="col-2"style="padding:0;" >
                <input type="text" name="ficha" value=""  id="ficha" style="width:100%;"  readonly="readonly">
             </div>
             <div class="col-2" style="padding:0;">
                <input type="text" name="consecut" value="MUNICIPIO"  class="areal"  style="width:100%; text-align:center;"   readonly="readonly">
             </div>
             <div class="col-2" style="padding:0;">
                <input type="text" name="municipio" value=""  id="municipio" style="width:100%;"   readonly="readonly">
             </div>

             <div class="col-4" style="padding:0;">
                <input type="text" name="consecut" value="CENTRO"  class="areal"  style="width:100%; text-align:center;" >
             </div>
             <div class="col-8"style="padding:0;" >
                <input type="text" name="centro" value=""  id="centro" style="width:100%;"  readonly="readonly">
             </div>

        </div>
            <div class="row">
                <div class="col-4" style="padding:0;">
                    <input type="text" name="consecut" value="SEDE" class="areal"  style="width:100%; text-align:center;"   readonly="readonly">
                </div>
                <div class="col-8"style="padding:0;" >
                    <input type="text" name="sede" value=""  id="sede" style="width:100%;" >
                </div>
                <div class="col-4" style="padding:0;">
                    <input type="text" name="consecut" value="ETAPA FORMACION" class="areal"  style="width:100%; text-align:center;"   readonly="readonly">
                </div>
                <div class="col-8" style="padding:0;">
                    <input type="text" name="etapa de formacion" value=""  id="etapa de formacion" style="width:100%;"  readonly="readonly">
                </div>
            </div>

          <div class="row">
              <div class="col-3" style="padding:0;">
                  <input type="text" name="consecut" value="ETAPA PROYECTO"  class="areal"  style="width:100%; text-align:center;"   readonly="readonly">
              </div>
              <div class="col-3"style="padding:0;" >
                  <input type="text" name="etapa proyecto" value=""  id="etapa proyecto" style="width:100%;"   readonly="readonly">
              </div>

              <div class="col-3" style="padding:0;">
                  <input type="text" name="consecut" value="INSTRUCTOR LIDER"  class="areal" style="width:100%; text-align:center;"   readonly="readonly">
              </div>
              <div class="col-3" style="padding:0;">
                  <input type="text" name="instructor lider" value=""  id="instructor lider" style="width:100%;"  readonly="readonly">
              </div>
          </div>
          <br><br>
              <div class="col-12" style="padding:0;">
                      <input type="text" name="consecut" value="JUSTIFICACIÓN"  class="areal" style="width:100%; text-align:center;"  readonly="readonly" >
              </div>
              <div class="col-12" style="padding:0;">
                  <input type="text" name="justificacion" value="" id="justificacion" style="width:100%; text-align:center;"   readonly="readonly">
              </div>
            
      <div class="modal-footer">
       <button type="button" class="btn btn-primary" id="btnsave">Citar A Comite</button>
       <button type="button" class="btn btn-primary" id="btnsave">Generar Pdf</button>
      <br>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
