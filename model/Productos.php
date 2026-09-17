<?php
    //la clase Producto hereda las funciones de la clase conetar
    class Producto extends Conectar
    {
        //obtiene todos los productos de la base de datos
        public function get_producto(){

            //Establecer la conexion con la base de datos
            $conectar = parent::conexion();

            //codificacion de caracteres
            parent::set_names();

            //consulta sql para obtener todos los productos
            $sql = "SELECT * FROM tm_productos WHERE est = 1";

            //preparar la consulta
            $sql = $conectar->prepare($sql);

            //ejecuta la consulta
            $sql = execute();

            //se obtiene y se retorna todos los registros encontrados
            $resultado = $sql->fetchAll();

            return$resultado;

        }
    }

?>