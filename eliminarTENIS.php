<?php

    if( isset($_POST["id_tenis"]))
    {
        echo $_POST["id_tenis"];

        require("conexion.php");
        $id_registro = $_POST["id_tenis"];
        $accion = "DELETE from tenis WHERE id_tenis = '$_REQUEST[id_tenis]'";
        mysqli_query($con, $accion);
        header("location:buscarTenis.html");
        echo mysqli_error($con);
    }
?> 
eliminarTENIS.php