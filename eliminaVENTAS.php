<?php

    if( isset($_POST["id_ventas"]))
    {
        echo $_POST["id_ventas"];

        require("conexion.php");
        $id_registro = $_POST["id_ventas"];
        $accion = "DELETE from ventas WHERE id_ventas = '$_REQUEST[id_ventas]'";
        mysqli_query($con, $accion);
        header("location:buscarVentas.html");
        echo mysqli_error($con);
    }
?> 
