<?php

class ControllerUser
{

    /*=============================================
    LOGIN
    =============================================*/
    static public function ctrLoginToUsers()
    {
        if (isset($_POST["email"]) && isset($_POST["password"])) {

            // Validar que los campos no estén vacíos
            if (empty($_POST["email"]) || empty($_POST["password"])) {
                echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Campos obligatorios",
                    text: "Por favor completa todos los campos",
                    confirmButtonText: "Cerrar"
                });
            </script>';
                return;
            }


            // Validar formato de email
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Email inválido",
                    text: "Por favor ingresa un email válido",
                    confirmButtonText: "Cerrar"
                });
            </script>';
                return;
            }

            $tabla = "isste_db.users";
            $item = "email";
            $valor = trim(strtolower($_POST["email"]));

            $respuesta = ModelUsers::mdlMostrarUsuarios($tabla, $item, $valor);

            if ($respuesta && password_verify($_POST["password"], $respuesta["password"])) {
                // Login correcto
                $_SESSION["user_id"]   = $respuesta["user_id"];
                $_SESSION["name_user"] = $respuesta["name_user"];
                $_SESSION["role_id"]   = $respuesta["role_id"];
                $_SESSION["iniciarSesion"] = "ok";

                echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "Bienvenido ' . $respuesta["name_user"] . '",
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            window.location = "index.php?ruta=inicio";
                        });
                    </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Credenciales incorrectas",
                        text: "Por favor revisa tu email y contraseña",
                        confirmButtonText: "Cerrar"
                    });
                </script>';
            }
        }
    }

    /*=============================================
    REGISTRO
    =============================================*/
    static public function ctrRegisterUser()
    {
        if (isset($_POST["fullName"], $_POST["regEmail"], $_POST["regPassword"], $_POST["confirmPassword"])) {

            if ($_POST["regPassword"] !== $_POST["confirmPassword"]) {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Contraseñas no coinciden',
                        confirmButtonText: 'Cerrar'
                    });
                </script>";
            } else {
                // Validar que el email no esté vacío y tenga formato válido
                if (empty($_POST["regEmail"]) || !filter_var($_POST["regEmail"], FILTER_VALIDATE_EMAIL)) {
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Email inválido',
                            text: 'Por favor ingresa un email válido',
                            confirmButtonText: 'Cerrar'
                        });
                    </script>";
                    return;
                }

                // Validar que los campos no estén vacíos
                if (empty($_POST["fullName"]) && empty($_POST["regPassword"])) {
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Campos obligatorios',
                            text: 'Por favor completa todos los campos',
                            confirmButtonText: 'Cerrar'
                        });
                    </script>";
                    return;
                }

                $tabla = "isste_db.users";

                // Encriptar la contraseña antes de guardarla
                $passwordEncriptada = password_hash($_POST["regPassword"], PASSWORD_DEFAULT);


                $datos = array(
                    "role_id" => 1,
                    "name_user" => trim($_POST["fullName"]),
                    "email"     => trim(strtolower($_POST["regEmail"])),
                    "password"  => $passwordEncriptada
                );

                $respuesta = ModelUsers::mdlRegistrarUsuario($tabla, $datos);

                if ($respuesta == "ok") {
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Usuario registrado con éxito',
                            confirmButtonText: 'Cerrar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = 'index.php?ruta=inicio';
                            }
                        });
                    </script>";
                } else if ($respuesta == "email_existe") {
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Email ya registrado',
                            text: 'Este email ya está en uso',
                            confirmButtonText: 'Cerrar'
                        });
                    </script>";
                } else {
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al registrar usuario',
                            text: 'Inténtalo nuevamente',
                            confirmButtonText: 'Cerrar'
                        });
                    </script>";
                }
            }
        }
    }
}
