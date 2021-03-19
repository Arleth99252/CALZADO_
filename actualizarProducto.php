<?php
ob_start();

    if( isset($_POST["id_tenis"]))
    {
        echo $_POST["id_tenis"];
        require("conexion.php");
        $id_tenis = $_POST["id_tenis"];
        $precio = $_POST["precio"];
        $color = $_POST["color"];
        $marca = $_POST["marca"];
        $tamaño = $_POST["tamaño"];
        $material = $_POST["material"];
        $accion = "UPDATE tenis SET id_tenis = '$id_tenis', precio = '$precio', color = '$color', marca = '$marca', tamaño = '$tamaño', material = '$material' WHERE id_tenis = '$id_tenis'";
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
