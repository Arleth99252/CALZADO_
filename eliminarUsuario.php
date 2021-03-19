<?php

    if( isset($_POST["id_cliente"]))
    {
        echo $_POST["id_cliente"];

        require("conexion.php");
        $id_registro = $_POST["id_cliente"];
        $accion = "DELETE from registro WHERE id_cliente = '$_REQUEST[id_cliente]'";
        mysqli_query($con, $accion);
        header("location:buscarRegistro.html");
        echo mysqli_error($con);
    }
?> 
