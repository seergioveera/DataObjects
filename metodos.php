<!-- definir metodos utilizando setencias preparadas -->

<?php
include_once('conexion.php');
class Metodos
{

    //funcion para insertar registros
    public function Registrar($ci, $nombre, $apellido, $telefono, $direccion, $estado)
    {
        $db = new Conexion();
        $pdo = $db->Open(); //abre la conexion
        //sentencia preparada
        $sql = "INSERT INTO cliente (ci, nombre, apellido, telefono, direccion, estado) VALUES (?, ?, ?, ?, ?, ?)";
        $query = $pdo->prepare($sql);
        //enviar parametros
        $query->bindParam(1, $ci);
        $query->bindParam(2, $nombre);
        $query->bindParam(3, $apellido);
        $query->bindParam(4, $telefono);
        $query->bindParam(5, $direccion);
        $query->bindParam(6, $estado);

        //ejecutar
        $query->execute();
    }

    //funcion para obtener datos del cliente
    public function Obtener($ci)
    {
        $db = new Conexion();
        $pdo = $db->Open();
        $sql = "SELECT * FROM cliente WHERE ci=?";
        $query = $pdo->prepare($sql);
        $query->bindParam(1, $ci);
        $query->execute();
        //almacena registros en la variable $row
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            //enviar registros al array result[]
            $result[] = $row;
            return $result; //retornar array.
        }
    }

    //funcion para modificar datos del cliente
    public function Modificar($ci, $nombre, $apellido, $telefono, $direccion, $estado, $id)
    {

        $db = new Conexion();
        $pdo = $db->Open();
        $sql = "UPDATE cliente SET ci=?, nombre=?, apellido=?, telefono=?, direccion=?, estado=? WHERE id=?";
        $query = $pdo->prepare($sql);
        $query->bindParam(1, $ci);
        $query->bindParam(2, $nombre);
        $query->bindParam(3, $apellido);
        $query->bindParam(4, $telefono);
        $query->bindParam(5, $direccion);
        $query->bindParam(6, $estado);
        $query->bindParam(7, $id);
        $query->execute();
    }

    public function Listar()
    {
        $db = new Conexion();
        $pdo = $db->Open();
        $sql = "SELECT ci, nombre, apellido, telefono, direccion, CASE WHEN estado=1 THEN 'Activo' ELSE 'Inactivo' END AS estado FROM cliente ORDER BY id DESC LIMIT 10 ";
        $query = $pdo->prepare($sql);
        $query->execute();
        //almacena registros en la variable $row

        return $query->fetchAll();
    }

    function reporteCliente()
    {
        $db = new Conexion();
        $pdo = $db->Open();
        $sql = "SELECT  * FROM cliente";
        $query = $pdo->prepare($sql);
        $query->execute();
        while($row = $query->fetchAll(PDO::FETCH_ASSOC)) { //fetchAll trae todas las filas de la bd
            $result = $row;
            return $result;
        }
    }
} //fin class

?>