<?php

// La clase Producto hereda las funciones de la clase Conectar
class Producto extends Conectar
{
    // Obtiene todos los productos de la base de datos
    public function get_producto()
    {
        // Establece la conexión con la base de datos
        $conectar = parent::conexion();

        // Configura la codificación de caracteres
        parent::set_names();

        // Consulta SQL para obtener todos los productos
        $sql = "SELECT * FROM tm_producto WHERE est = 1";

        // Prepara la consulta SQL
        $sql = $conectar->prepare($sql);

        // Ejecuta la consulta
        $sql->execute();

        // Obtiene y retorna todos los registros encontrados
        $resultado = $sql->fetchAll();

        return $resultado;
    }

}

?>