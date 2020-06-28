<?php
class Conexion {
    public $pdo = null;

    public function Open() {

        try {
            $dsn = "mysql:dbname=php; host=localhost";
            $user = "root";
            $password = "";
            $this->pdo = new PDO($dsn, $user, $password);

            if ($this->pdo) {
                // echo "Conexion exitosa.";
            } else {
                // echo "Error en la conexion";
            }
            return $this->pdo;

        } catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
        }
        return $this -> pdo;
    }
}
