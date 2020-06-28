// definir funciones que permitan mostrar los archivos php

function nuevo() {
  $.get("formulario.php", {}, function (data) {
    alert("Agregar nuevo.");
    $("#datos").html(data);
  });
}

function buscar() {
  var ci = $("#ci").val();
  $.get("modificar.php", { ci: ci }, function (data) {
    alert("Buscando...");
    $("#datos").html(data);
  });
}

function listar() {
  $.get("consultar.php", {}, function (data) {
    alert("Listando...");
    $("#datos").html(data);
  });
}
