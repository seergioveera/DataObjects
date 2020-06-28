<!-- recibira los datos del formulario -> insert||update-->
<?php
include "metodos.php";

//estos valores se reciben para insert||update
$ci = $_POST["txtCi"];
$nombre = $_POST["txtNombre"];
$apellido = $_POST["txtApellido"];
$telefono = $_POST["txtTelefono"];
$direccion = $_POST["txtDireccion"];
$estado = $_POST["txtEstado"];

//objeto para acceder a las funciones
$obj = new Metodos();

//si pulsamos btnBuscar
if (isset($_POST["btnAgregar"])) {
    //ejecuta la funcion Registar pasando los parametros necesarios
    $obj->Registrar($ci, $nombre, $apellido, $telefono, $direccion, $estado);
}

//si pulsamos el boton Modificar
if (isset($_POST["btnModificar"])) {
    $id = $_POST["txtId"]; //recuperar id
    $obj->Modificar($ci, $nombre, $apellido, $telefono, $direccion, $estado, $id);
}

//mensaje && redireccionar al index
echo '<script type="text/javascript">
    alert("Registrado correctamente.");
    window.location.href="index.php";
    </script>';

?>