<?php

    if( isset($_POST["id_tenis"]))
    {
        echo $_POST["id_tenis"];
        require("conexion.php");
        $id_tenis = $_POST["id_tenis"];
        $precio = $_POST["precio"];
        $color = $_POST["color"];
        $marca= $_POST["marca"];
        $tipo = $_POST["tipo"];
        $tamaño = $_POST["tamaño"];
        $material = $_POST["material"];
        $accion = "INSERT INTO tenis (id_tenis, precio, color, marca, tipo, tamaño, material) values ('$id_tenis','$precio','$color','$marca','$tipo', '$tamaño', '$material')";
        mysqli_query($con, $accion);
        echo mysqli_error($con);
    }
    header("location:formularios.html")
?> 