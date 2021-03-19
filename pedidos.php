<?php

    if( isset($_POST["id_pedido"]))
    {
        echo $_POST["id_pedido"];
        require("conexion.php");
        $id_pedido = $_POST["id_pedido"];
        $id_cantidad = $_POST["id_cantidad"];
        $fechapedido = $_POST["fechapedido"];
        $fechaentrega = $_POST["fechaentrega"];
        $id_producto = $_POST["id_producto"];
        $accion = "INSERT INTO pedidos (id_pedido, id_cantidad, fechapedido, fechaentrega, id_producto) values ('$id_pedido','$id_cantidad','$fechapedido','$fechaentrega','$id_producto')";
        mysqli_query($con, $accion);
        echo mysqli_error($con);
    }
    header("location:formularios.html")
?> 