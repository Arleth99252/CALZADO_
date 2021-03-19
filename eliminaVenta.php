<?php
ob_start();
    
$mysql= new mysqli ("localhost", "root", "", "calzado");
if ($mysql -> connect_error)
    die("No se conecto con la base de datos");

$registro = $mysql -> query("SELECT * FROM ventas WHERE id_ventas = '$_REQUEST[id_ventas]'") or
die($mysql -> error);

if ($reg = $registro -> fetch_array()) 
{
    $strid_ventas = $reg["id_ventas"];
    $strn_cliente = $reg["id_cliente"];
    $strafechaventas = $reg["fechaventas"];
    $strtotal = $reg["total"];
    $strcantidad = $reg["cantidad"];
}
else
echo 'No existe el pedido';

$mysql ->close();

ob_end_flush();
?>

   <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/mmain.css" rel="stylesheet" media="all">
    <form id="msform" action="eliminaVENTAS.php" method="POST">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"> Actualizar Ventas</h2>
                    <form method="POST">
                         <div class="input-group">
                            <input class="input--style-3" value= "<?php echo $reg['id_ventas'];?>"  type="text" placeholder="Numero De Venta" name="id_ventas" required="required">
                        </div>
                        <div class="input-group">
                          <input class="input--style-3" type="text" value="<?php echo $reg['id_cliente'];?>" placeholder="Munero De Cliente" name="id_cliente" >
                        </div> 
                        <div class="input-group">
                            <input class="input--style-3" type="text" value= "<?php echo $reg['fechaventas'];?>" name="fechaventas">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $reg['total'];?>" placeholder="Total" name="total">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $reg['cantidad'];?>" placeholder="Cantidad" name="cantidad">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="text" name="submit">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor1/select2/select2.min.js"></script>
    <script src="vendor1/datepicker/moment.min.js"></script>
    <script src="vendor1/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->