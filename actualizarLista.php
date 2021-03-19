<?php
ob_start();

    if( isset($_POST["id_ventas"]))
    {
        echo $_POST["id_ventas"];
        require("conexion.php");
        $id_ventas = $_POST["id_ventas"];
        $id_cliente= $_POST["id_cliente"];
        $fechaventas = $_POST["fechaventas"];
        $total = $_POST["total"];
        $cantidad = $_POST["cantidad"];
        $accion = "UPDATE ventas SET id_ventas = '$id_ventas', id_cliente = '$id_cliente', fechaventas = '$fechaventas', total = '$total', cantidad = '$cantidad' WHERE id_ventas = '$id_ventas'";
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

