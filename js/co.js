function cargarDato(dato){

    $.ajax({
        type:'POST',
        data: 'id='+dato,
        url:"libs/reportecoordinador.php",
        success:function(r){
            //var arra=JSON.parse(r);
            arra= jQuery.parseJSON(r);
            alert(arra);

            var s0=document.getElementById("areau");
            s0.value=arra[0];
            var s1=document.getElementById("areados");
            s1.value=arra[1];
            var s2=document.getElementById("fecha");
            s2.value=arra[2];
            var s3=document.getElementById("programa");
            s3.value=arra[3];
            var s4=document.getElementById("nivel");
            s4.value=arra[4];
            var s5=document.getElementById("ficha");
            s5.value=arra[5];
            var s6=document.getElementById("municipio");
            s6.value=arra[6];
            var s7=document.getElementById("centro");
            s7.value=arra[7];
            var s8=document.getElementById("sede");
            s8.value=arra[8];
            var s9=document.getElementById("etapa de formacion");
            s9.value=arra[9];
            var s10=document.getElementById("etapa proyecto");
            s10.value=arra[10];
            var s11=document.getElementById("instructor lider");
            s11.value=arra[11];
            var s12=document.getElementById("justificacion");
            s12.value=arra[12];




        }
    });

}