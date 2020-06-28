<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Object</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="jquery.js" type="text/javascript"></script>
    <script src="ajax.js" type="text/javascript"></script>
</head>

<body>
    <div class="principal">
        <h1>GESTION DE CLIENTES</h1>
        <br><br>
        <div class="formulario">
            <label for="ci">Ingrese nro. de Cedula.</label>
            <input type="text" name="txtCi" id="ci" placeholder="Ingrese número de cédula.">
            <button name="btnBuscar" onclick="buscar()">Buscar</button>
            <p>
            <input type="submit" value="Agregar" name="btnAgregar" onclick="nuevo()">
            <input type="submit" value="Listar" name="btnListar" onclick="listar()">
            <button name="btnBuscar" onclick="window.open('reporte.php','_blank')">Reporte de clientes.</button>
            </p>
        </div>
    </div>
    <div id="datos">
    </div>
</body>

</html>