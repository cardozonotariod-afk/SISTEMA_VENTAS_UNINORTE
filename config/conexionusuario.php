
<?php

class Conectar {

    protected function Conexion() {

        try {

            $conectar = new PDO(
                "mysql:host=localhost;dbname=ventas;charset=utf8mb4",
                "root",
                ""
            );

            $conectar->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $conectar;

        } catch (PDOException $e) {

            die("Error de conexión: " . $e->getMessage());

        }
    }

    public function set_names() {
        return $this->Conexion();
    }
}
