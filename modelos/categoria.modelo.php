<?php

// Invocar o llamar a la conexión
require_once "conexion.php";

class ModeloCategoria {
    // Crear o registrar categoría
    public static function mdlIngresarCategoria($tabla, $datos) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre) VALUES(:nombre)");
        $stmt->bindParam(":nombre", $datos, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "OK";
        } else {
            return "Error";
        }

        $stmt->close();
        $stmt = null;
    }

    // Mostrar las categorías
    public static function mdlMostrarCategoria($tabla, $item, $valor) {
        if ($item != null) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();   
            return $stmt->fetchAll();  
        }

        $stmt->close();
        $stmt = null;   
    }

    // Editar categoría
    public static function mdlEditarCategoria($tabla, $datos) {
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id = :id");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "OK";
        } else {
            return "Error";
        }

        $stmt->close();
        $stmt = null;
    }
}
