
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/build/css/app.css">
    <title>www.pxconsultores.com</title>
</head>

<body>
    <header class="header">
        <div class="inicio">
            <a href="index.php">
                <div class="barra">
                    <h1>PX Consultores S.A. de C.V.</h1>
                    <p>Innovation & Manufacturing</p>
                </div>
            </a>
            <div class="contenedor_nav">
                <nav class="navegacion">
                    <a href="index.php" class="<?php if($inicio){ echo "active";} ?>">Inicio</a>
                    <a href="nosotros.php" class="<?php if($nosotros){ echo "active";} ?>">Nosotros</a>
                    <a href="contacto.php" class="<?php if($contacto){ echo "active";} ?>">Contactenos</a>
                </nav>
            </div>
        </div>
    </header>

    <div class="contenedor-social-media" id="socia-media-padre">
        <div class="social-media">
            <a href="https://mx.linkedin.com/company/px-consultores"><img src="/build/img/linkedin.svg"></a>
            <a href="#"><img src="/build/img/whatsapp.svg"></a>
            <a href="#"><img src="/build/img/facebook.svg"></a>
        </div>
    </div>