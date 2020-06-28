<!-- este formulario se vera en la etiqueta <div id="datos"> (index) -->

<div class="form">
    <form action="datos.php" method="post">
        <h2>Agregar cliente.</h2>
        <br>Nro. de Cedula <input type="text" name="txtCi" id="ci" placeholder="Numero de cédula" required>
        <br>Nombre <input type="text" name="txtNombre" placeholder="Nombre" required>
        <br>Apellido <input type="text" name="txtApellido" placeholder="Apellido" required>
        <br>Telefono <input type="text" name="txtTelefono" placeholder="Telefono" required>
        <br>Direccion <input type="text" name="txtDireccion" placeholder="Direccion" required>
        <br>Estado <input type="text" name="txtEstado" placeholder="Estado 1 ó 2" required>
        <br><br><input type="submit" value="Guardar" name="btnAgregar">
    </form>
</div>