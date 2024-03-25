
// Definimos una función para combinar los valores
function combinar() {
    var fecha = document.getElementById("fecha").value.replaceAll("-", "").slice(2);
    var hora = document.getElementById("hora").value.replaceAll(":", "");
    var autoclave = document.getElementById("autoclave").value;
    var responsable = document.getElementById("responsable").value;
    
    var lote = fecha + hora + autoclave + responsable;
    document.getElementById("lote").value = lote;
  }
  
  // Llamamos a la función combinar() al cargar la página y cada vez que cambia cualquier campo
  window.onload = combinar;
  document.getElementById("fecha").addEventListener("input", combinar);
  document.getElementById("hora").addEventListener("input", combinar);
  document.getElementById("autoclave").addEventListener("input", combinar);
  document.getElementById("responsable").addEventListener("input", combinar);
  