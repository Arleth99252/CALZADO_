<?php

    if( isset($_POST["id_ventas"]))
    {
        echo $_POST["id_ventas"];
        require("conexion.php");
        $id_ventas = $_POST["id_ventas"];
        $id_cliente = $_POST["id_cliente"];
        $id_producto = $_POST["id_producto"];
        $fechaventas = $_POST["fechaventas"];
        $total = $_POST["total"];
        $cantidad = $_POST["cantidad"];
        $accion = "INSERT INTO ventas (id_ventas, id_cliente, id_producto, fechaventas, total, cantidad) values ('$id_ventas','$id_cliente','$id_producto','$fechaventas','$total', '$cantidad')";
        mysqli_query($con, $accion);
        echo mysqli_error($con);
    }
    header("location:formularios.html")
?> 