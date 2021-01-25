<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrar</title>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <h1 style="color:red">Crear usuario</h1>
                    <br>
                    <center>
                        <form action="crearUsuario.php" method="post" enctype="multipart/form-data">
                            <input class="form-control" type="text" id="nombre" required name="nombre" placeholder="Introduce tu nombre" value="" /> <br>
                            <input class="form-control" type="email" id="correo" name="correo" placeholder="Introduce tu correo electrónico"></input>
                            <br>
                            <input class="form-control" type="password" id="contra" name="contra" placeholder="Crear una contraseña de 8-15 digitos"></input>
                            <br>
                            <input type="submit" class="btn btn-success" value="Aceptar" />
                            <a href="inicioSesion.html" class="btn btn-danger">Regresar</a>
                            
                        </form>
                    </center>
                </div>



</body>

</html>