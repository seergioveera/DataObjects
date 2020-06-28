<!-- cargara registro en un formulario para realizar el update -->
<?php
include "metodos.php";
if (isset($_GET["ci"])) {
    //ci, valor obtenido desde el archivo ajax
    $ci = $_GET["ci"];
    $obj = new Metodos();
    //$query, variable que ejecuta el metodo Obtener
    $query = $obj->Obtener($ci);
    if (!empty($query)) { //si se encontro coincidencias
        foreach ($query as $row) { //pasar la fila del registro encontrado a $row
?>
            <div class="form">
                <h2>Modificar cliente.</h2>
                <form action="datos.php" method="post">
                    <input type="hidden" name="txtId" value="<?php echo $row['id']; ?>">
                    <!-- value, carga cada campo de la bd a ser modificado -->
                    <br>Nro. de Cedula <input type="text" name="txtCi" value="<?php echo $row['ci']; ?>">
                    <br>Nombre <input type="text" name="txtNombre" value="<?php echo $row['nombre']; ?>">
                    <br>Apellido <input type="text" name="txtApellido" value="<?php echo $row['apellido']; ?>">
                    <br>Telefono <input type="text" name="txtTelefono" value="<?php echo $row['telefono']; ?>">
                    <br>Direccion <input type="text" name="txtDireccion" value="<?php echo $row['direccion']; ?>">
                    <br>Estado <input type="text" name="txtEstado" value="<?php echo $row['estado']; ?>">

                    <br>
                    <input type="submit" value="Modificar" name="btnModificar">
                </form>
            </div>
<?php
        }
    } else { //sino se encontro coincidencias
        echo '<script type="text/javascript">
    alert("Cliente no registrado.");
    </script>';
    }
}
?>