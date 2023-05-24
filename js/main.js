// funcion de mapa gps ubicacion y tomar datos de longitud y latitu
function findMe(){
   var output = document.getElementById('map');
   // Verificar si soporta geolocalizacion
   if (navigator.geolocation) {
       output.innerHTML = "<p>Tu navegador soporta Geolocalizacion</p>";
   }else{
      output.innerHTML = "<p>Tu navegador no soporta Geolocalizacion</p>";
   }
     //Obtenemos latitud y longitud
      function localizacion(posicion){
        var latitude = posicion.coords.latitude;
        var longitude = posicion.coords.longitude;
        var ventana ='<h5>Tu Domicilio</h5>'+'<p>Para servicios o envio de pagos</p>';
        output.innerHTML ="<p>Latitud: "+latitude+"<br> Longitud: "+longitude+"</p>";
        const myLatLng = { lat:latitude, lng: longitude };
        const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 18,
        center: myLatLng,
        // cambiar a terreno  mapTypeId: 'satellite',
      });
        marcador = new google.maps.Marker({
        position: myLatLng,
        draggable: true,
        map,
        title: "Te encuentras aqui!",
        });
        var info = new google.maps.InfoWindow({
          content: ventana
        });
        marcador.addListener('click',function(){
          info.open(map, marcador);
        });
        marcador.addListener('dragend',function(event){
          document.getElementById("latitud").value = this.getPosition().lat();
          document.getElementById("longitud").value = this.getPosition().lng();
        })



      }
      function error(){
      output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";
      }
     navigator.geolocation.getCurrentPosition(localizacion,error);
   }
   // funcion validar solo numeros 
   function VNumeros(e){
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    numero = "1234567890";
    especiales = "8-37-38-46";
    teclado_especial = false;
    for(var i in especiales){
        if(key == especiales[i]){
            teclado_especial = true;
        }
    } 
    if(numero.indexOf(teclado) == -1 && !teclado_especial){
       return false;

    }
 }
 