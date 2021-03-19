<?php
ob_start();

    if( isset($_POST["id_pedido"]))
    {
        echo $_POST["id_pedido"];
        require("conexion.php");
        $id_pedido = $_POST["id_pedido"];
        $id_cantidad= $_POST["id_cantidad"];
        $fechapedido = $_POST["fechapedido"];
        $fechaentrega = $_POST["fechaentrega"];
        $id_producto = $_POST["id_producto"];
        $accion = "UPDATE pedidos SET id_pedido = '$id_pedido', id_cantidad = '$id_cantidad', fechapedido = '$fechapedido', fechaentrega = '$fechaentrega', id_producto = '$id_producto' WHERE id_pedido = '$id_pedido'";
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