<?php

    if( isset($_POST["id_pedido"]))
    {
        echo $_POST["id_pedido"];

        require("conexion.php");
        $id_registro = $_POST["id_pedido"];
        $accion = "DELETE from pedidos WHERE id_pedido = '$_REQUEST[id_pedido]'";
        mysqli_query($con, $accion);
        header("location:buscarPedidos.html");
        echo mysqli_error($con);
    }
?> 
eliminarProductos.php