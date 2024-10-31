<?php 
class ControladorCategoria {
    // Crear o insertar categorias
    public static function ctrCrearCategoria() {
        if (isset($_POST["nuevaCategoria"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])) {
                $tabla = "categorias";
                $datos = $_POST["nuevaCategoria"];
                $respuesta = ModeloCategoria::mdlIngresarCategoria($tabla, $datos);
                
                if ($respuesta == "OK") {
                    echo '<script>
                        swal({
                            type: "success",
                            title: "La categoría ha sido registrada correctamente",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result) {
                            if (result.value) {
                                window.location = "categoria";
                            }
                        });
                    </script>';
                }
            } else {
                echo '<script>
                    swal({
                        type: "error",
                        title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {
                            window.location = "categoria";
                        }
                    });
                </script>';
            }
        }
    }

    // Mostrar Categorias
    public static function ctrMostrarCategoria($item, $valor) {
        $tabla = "categorias";
        $respuesta = ModeloCategoria::mdlMostrarCategoria($tabla, $item, $valor);
        return $respuesta;
    }

    // Editar categorías
    public static function ctrEditarCategoria() {
        if (isset($_POST["editarCategoria"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"])) {
                $tabla = "categorias";
                $datos = array("nombre" => $_POST["editarCategoria"], "id" => $_POST["idCategoria"]);
                $respuesta = ModeloCategoria::mdlEditarCategoria($tabla, $datos);

                if ($respuesta == "OK") {
                    echo '<script>
                        swal({
                            type: "success",
                            title: "La categoría ha sido cambiada correctamente",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result) {
                            if (result.value) {
                                window.location = "categoria";
                            }
                        });
                    </script>';
                }
            } else {
                echo '<script>
                    swal({
                        type: "error",
                        title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {
                            window.location = "categoria";
                        }
                    });
                </script>';
            }
        }
    }
}
