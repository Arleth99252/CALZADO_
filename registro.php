<?php

    if( isset($_POST["nombre"]))
    {
        echo $_POST["nombre"];
        require("conexion.php");
       
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $contraseña = $_POST["contraseña"];
        $fechadenacimiento = $_POST["fechadenacimiento"];
        $genero = $_POST["genero"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $accion = "INSERT INTO registro (nombre, apellido, contraseña, fechadenacimiento, genero, email, telefono) values ('$nombre','$apellido','$contraseña','$fechadenacimiento','$genero','$email', '$telefono')";
        mysqli_query($con, $accion);
        echo mysqli_error($con);
    }
    header("location:formularios.html")
?> 