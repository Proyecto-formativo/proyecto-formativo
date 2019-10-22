$(document).ready(function() {
  var change = document.getElementById("change");
  var dt = document.getElementsByClassName("boton");
  var listCompromisos = [];
  //se ingresara un texto donde se indicara la funcionalidad del sistema nota: solo al principio de la pagina

  change.innerHTML = `
    <div class="style-float">
    
      <p>En este software se llevara el seguimiento
      a los aprendices que esten
      citados a comité, y los procesos a seguir por parte
      de los Instructores, Coordinacion y Bienestar</p>
    
      <div class="people">
        <p>JUAN PABLO AGUDELO CASTRO</p>
        <p>DIEGO ALEJANDRO ZULUAGA OSORIO</p>
        <p>SEBASTIAN SERNA VASCO</p>
        <p>FRAY DE JESUS MONTOYA</p>
      </div>
    </div>
  `;

  if (change.clientHeight < 600) {
    change.style.height = "100%";
  } else {
    change.style.height = null;
  }

  //se creara un ajax por boton con su respectivo enrutamiento
  for (let i = 0; i < dt.length; i++) {
    dt[i].addEventListener("click", function() {
      fetch("libs/control.php?numero=" + i)
        .then(res => res.text())
        .then(data => (change.innerHTML = data))
        .then(() => {

          $(".ficha").bind("keyup", function() {

            var ficha = $(".ficha").val();
            $.ajax({
              type: "post",
              url: "libs/numeroFicha.php",
              data: { numeroficha: ficha },
              success: function(respuesta) {
                $(".infoContent").html(respuesta);
              }
            }); //fin del ajax

          }); //fin de bind keyup

         



          $("#municipio").bind("change", function() {

            var municipio = $("#municipio").val();
            $.ajax({
              type: "post",
              url: "libs/peticionMunicipio.php",
              data: { municipio: municipio },
              success: function(respuesta) {
                $(".infoCentroSede").html(respuesta);
              }
            }); //fin del ajax

          }); //fin de bind keyup

          $("#botton-list").bind("click", (e)=> {
            e.preventDeFaut;
            var actividad_text = $('#actividad_text').val(),
                responsable = $('#responsable').val(),
                fecha = $('#fecha-compromiso').val(),
                array = [actividad_text,responsable,fecha],
                dato = "";
                
            listCompromisos.push(array);


            for (let i= 0; i < listCompromisos.length; i++) {
              dato += `
              <tr>
              <td>${Number(i+1)}</td>
              <td>${listCompromisos[i][0]}</td>
              <td>${listCompromisos[i][1]}</td>
              <td>${listCompromisos[i][2]}</td>
              </tr>
              `;
              $('#listar-compromisos-tabla').html(dato);
            }
            console.log(listCompromisos);
            let lista = JSON.parse(listaCompromisos);
            $("#listaCompromisos").val(lista);
            
            
            
      

          }); //fin de bind keyup







        }); //fin them

      if (i == 0) {
        change.style.height = null;
      } else {
        change.style.height = "100%";
      }
    });
  }
});
