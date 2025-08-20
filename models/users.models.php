<?php

require_once "connection.php";

class ModelUsers
{

    /*=============================================
    MOSTRAR USUARIO POR EMAIL
    =============================================*/
    static public function mdlMostrarUsuarios($tabla, $item, $valor)
    {
        $stmt = ConnectionIssteFandom::connection()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Devuelve un solo usuario
    }

    /*=============================================
    REGISTRAR USUARIO
    =============================================*/
    static public function mdlRegistrarUsuario($tabla, $datos)

    {
        // Primero verificar si el email ya existe
        $stmtCheck = ConnectionIssteFandom::connection()->prepare(
            "SELECT email FROM $tabla WHERE email = :email"
        );

        $stmtCheck->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmtCheck->execute();

        if ($stmtCheck->rowCount() > 0) {
            return "email_existe";
        }

        // Si el email no existe, proceder con el registro
        $stmt = ConnectionIssteFandom::connection()->prepare(
            "INSERT INTO $tabla (role_id, name_user, email, password) 
             VALUES (:role_id, :name_user, :email, :password)"
        );

        $stmt->bindParam(":role_id", $datos["role_id"], PDO::PARAM_INT);
        $stmt->bindParam(":name_user", $datos["name_user"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            // Para debug, puedes agregar esto temporalmente
            error_log("Error SQL: " . print_r($stmt->errorInfo(), true));
            return "error";
        }
    }
}
