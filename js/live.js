$(buscar_datos());
function buscar_datos(consulta){
$.ajax({
    url:'../includes/acciones.php',
    type: 'POST',
    dataType:'html',
    data:{consulta: consulta},
})
.done(function(respuesta){
    $('#datos').html(respuesta);    
})
.fail(function(){
console.log("error");
})
}

$(document).on('keyup','#caja_busqueda', function(){
    dato = $(this).val();
    if(dato != ""){
      buscar_datos(dato);
    }
    else{
        buscar_datos();
    }
});