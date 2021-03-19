<?php

    if( isset($_POST["id_usuario"]))
    {
        echo $_POST["id_usuario"];
        require("conexion.php");
        $id_usuario = $_POST["id_usuario"];
        $contraseña = $_POST["contraseña"];
        $accion = "INSERT INTO login (id_usuario,contraseña) values ('$id_usuario','$contraseña')";
        mysqli_query($con, $accion);
        echo mysqli_error($con);
    }
    header("location:index.html")
?> 