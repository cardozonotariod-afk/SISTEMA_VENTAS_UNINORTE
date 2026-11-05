
<?php

class Usuario extends Conectar {

    public function get_usuario() {

        $conectar = parent::Conexion();

        $sql = "SELECT * FROM tm_usuario
                WHERE fech_elim IS NULL";

        $sql = $conectar->prepare($sql);
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_usuario_x_id($usuario_id) {

        $conectar = parent::Conexion();

        $sql = "SELECT * FROM tm_usuario
                WHERE usuario_id = ?
                AND fech_elim IS NULL";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario_id);
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_usuario($user_nom, $user_usuario, $user_contra) {

        $conectar = parent::Conexion();

        $sql = "INSERT INTO tm_usuario
                (user_nom, user_usuario, user_contra, fech_crea, esta)
                VALUES (?, ?, ?, NOW(), 1)";

        $sql = $conectar->prepare($sql);

        $sql->bindValue(1, $user_nom);
        $sql->bindValue(2, $user_usuario);
        $sql->bindValue(3, password_hash($user_contra, PASSWORD_DEFAULT));

        return $sql->execute();
    }

    public function update_usuario($usuario_id, $user_nom, $user_usuario) {

        $conectar = parent::Conexion();

        $sql = "UPDATE tm_usuario
                SET user_nom = ?,
                    user_usuario = ?,
                    fech_mod = NOW()
                WHERE usuario_id = ?";

        $sql = $conectar->prepare($sql);

        $sql->bindValue(1, $user_nom);
        $sql->bindValue(2, $user_usuario);
        $sql->bindValue(3, $usuario_id);

        return $sql->execute();
    }

    public function delete_usuario($usuario_id) {

        $conectar = parent::Conexion();

        $sql = "UPDATE tm_usuario
                SET fech_elim = NOW(), esta = 0
                WHERE usuario_id = ?";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario_id);

        return $sql->execute();
    }
}
