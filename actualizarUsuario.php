<?php
ob_start();

    if( isset($_POST["nombre"]))
    {
        echo $_POST["nombre"];
        require("conexion.php");
        $id_cliente = $_POST["id_cliente"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $contraseña = $_POST["contraseña"];
        $fechadenacimiento = $_POST["fechadenacimiento"];
        $genero = $_POST["genero"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $accion = "UPDATE registro SET id_cliente = '$id_cliente', nombre = '$nombre', apellido = '$apellido', contraseña = '$contraseña', fechadenacimiento = '$fechadenacimiento', genero = '$genero', email = '$email', telefono = '$telefono' WHERE id_cliente = '$id_cliente'";
        $result = mysqli_query($con, $accion);
        echo mysqli_error($con);

        if ($result) 
        {
            header("location: actualizar.html");
        }
        else
        {
            echo 'Checa el query';
        }
    }
ob_end_flush();
?> 