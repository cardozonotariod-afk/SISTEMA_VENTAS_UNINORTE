
<?php

require_once("../config/conexionusuario.php");
require_once("../model/Usuario.php");

$usuario = new Usuario();

switch ($_GET["op"]) {

    case "listar":

        $datos = $usuario->get_usuario();

        $data = array();

        foreach ($datos as $row) {

            $sub_array = array();

            $sub_array[] = $row["user_nom"];
            $sub_array[] = $row["user_usuario"];

            $sub_array[] = '<button type="button"
                onClick="editar(' . $row["usuario_id"] . ');"
                class="btn btn-outline-primary btn-icon">
                <div class="fa fa-edit"></div>
            </button>';

            $sub_array[] = '<button type="button"
                onClick="eliminar(' . $row["usuario_id"] . ');"
                class="btn btn-outline-danger btn-icon">
                <div class="fa fa-trash"></div>
            </button>';

            $data[] = $sub_array;
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );

        echo json_encode($results);

        break;


    case "guardaryeditar":

        if (empty($_POST["usuario_id"])) {

            $usuario->insert_usuario(
                $_POST["user_nom"],
                $_POST["user_usuario"],
                $_POST["user_contra"]
            );

        } else {

            $usuario->update_usuario(
                $_POST["usuario_id"],
                $_POST["user_nom"],
                $_POST["user_usuario"]
            );

        }

        break;


    case "mostrar":

        $datos = $usuario->get_usuario_x_id($_POST["usuario_id"]);

        if (is_array($datos) && count($datos) > 0) {

            foreach ($datos as $row) {

                $output["usuario_id"] = $row["usuario_id"];
                $output["user_nom"] = $row["user_nom"];
                $output["user_usuario"] = $row["user_usuario"];

            }

            echo json_encode($output);

        }

        break;


    case "eliminar":

        $usuario->delete_usuario($_POST["usuario_id"]);

        break;

}
