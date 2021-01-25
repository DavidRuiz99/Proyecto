<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
</head>

<body background="imagen/fondo.jpg">

    <!-- Contenido de la parte superior -->
    <div class="jumbotron text-center div_jumbo" style="background-color:#e6e6e6">
        <div class="page-header">
           <img src="imagen/mp_logo.jpg" style="float:left; width: 170px; height:170px">
           <img src="imagen/hospital_logo.jpg" style="float:right; width:170px; height:170px">
            <h1 class="h1_jumbo" style="color:red"><b>Locatel</b></h1>
            
            <p class="p_jumbo" style="color:blue"><b>Encuentra tu familia</b></p>
            <!--Menú -->
            <div class="container" style="width: 40%">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <di class="navbar-nav mr-auto ml-auto" <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" href=>Hospitales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=>MP</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="inicioSesion.html">Cerrar sesion</a>
                            </li>
                            </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: white">
        <table class="table table-hover ">
            <!--
               <tbody>
                <?php 
                include("conexion.php");
                $query = "SELECT * FROM documentos";
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
                ?>
                <tr>
                   Imagen de la noticia
                    <td><img height=200px width="300" src="data:image/jpg;base64,<?php echo base64_encode($row['cont_multimedia']);?>" /></td>
                    Contenido de la noticia
                    <td><br><center><h3 style="color:red"><?php echo $row['nombre'];?></h3></center>
                    <br><?php echo $row['informacion'];?></td>
                </tr>
                <?php } ?>
            </tbody>
            -->
</body>

</html>