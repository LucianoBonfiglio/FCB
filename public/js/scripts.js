// APi Provincias
window.addEventListener("load", function() {
    fetch("https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre")
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        option = document.getElementById("provincia")
        tipos = json.provincias
  
        for (var i = 0; i < tipos.length; i++) {
          option.innerHTML += "<option value="+tipos[i].nombre+">" + tipos[i].nombre +"</option>"
        }
      })
  });

