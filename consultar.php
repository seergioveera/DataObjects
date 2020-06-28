<?php
include "metodos.php";
$obj = new Metodos();
//$query, variable que ejecuta el metodo Obtener
$query = $obj->Listar();
if (!empty($query)) { //si se encontro coincidencias
    echo "<table class='table'> <tr>"; //titulos
    echo "<th>Documento.</th>";
    echo "<th>Nombre.</th>";
    echo "<th>Apellido.</th>";
    echo "<th>Direccion.</th>";
    echo "<th>Telefono.</th>";
    echo "<th>Estado.</th>";


    foreach ($query as $row) {    //pasar la fila del registro encontrado a $row


        $nom = $row['nombre'];
        $ape = $row["apellido"];
        $ci = $row["ci"];
        $dir = $row["direccion"];
        $tel = $row["telefono"];
        $est = $row["estado"];


        echo "<tr><td>$ci</td>";
        echo "<td>$nom</td>";
        echo "<td>$ape</td>";
        echo "<td>$dir</td>";
        echo "<td>$tel</td>";
        echo "<td>$est</td>";
    }
} else { //sino se encontro coincidencias
    echo "No existen registros cargados.";
}
