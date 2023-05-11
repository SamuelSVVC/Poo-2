<?php
    require('BDconexion.php');

    // Obtener los datos del formulario
    $username = $_POST["usuario"];
    $pass = $_POST["pass"];
    $userR = $_POST['usuarioR'];
    $claveR = $_POST['passR'];


    // Llamar a la función validarUsuario()
    validarUsuario($username, $pass);

    // función para validar un usuario
    function validarUsuario($username, $pass){
        $conexion = new Conexion();
        $pdo = $conexion->con();

        $username = $pdo->quote($username); // Escapar los caracteres especiales en el nombre de usuario
        $pass = $pdo->quote($pass); // Escapar los caracteres especiales en la contraseña

        $query = "SELECT * FROM usuario WHERE usuario = $username AND clave = $pass";
        $resultado = $pdo->query($query);

        if($resultado->rowCount() == 1) {
            header("location: home.php");
        } else{
            echo "<script>
                alert('Error: Usuario o contraseña no válidos.');
                window.location.href = 'valiarlog.php';
              </script>";
        exit();
        }
    }


?>