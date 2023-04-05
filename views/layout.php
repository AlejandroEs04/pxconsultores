<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)) {
        $inicio = false;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../build/css/app.css">
    <title>www.pxconsultores.com</title>
</head>

<body>
    <header class="header">
        <div class="inicio">
            <a href="/">
                <div class="barra">
                    <h1>PX Consultores S.A. de C.V.</h1>
                    <p>Solutions for Automotive Industry</p>
                </div>
            </a>
            <div class="contenedor_nav">
                <nav class="navegacion">
                    <a href="/" class="<?php if($inicio){ echo "active";} ?>">Main</a>

                    <?php if(!$adminsi): ?>
                        <a href="/nosotros" class="<?php if($nosotros){ echo "active";} ?>">Who are we?</a>
                    <?php endif; ?>

                    <?php if(!$adminsi): ?>
                        <a href="/contacto" class="<?php if($contacto){ echo "active";} ?>">Contact us</a>
                    <?php endif; ?>

                    <?php if($adminsi): ?>
                        <a href="/admin">Administration</a>
                    <?php endif; ?>
                    
                    <?php if($auth): ?>
                        <a href="/logout">Log Out</a>
                    <?php endif; ?>

                    <?php if($adminsi): ?>
                        <a href="/nuevo">New Account</a>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </header>

    <?php if(!$adminsi): ?>
        <div class="contenedor-social-media" id="socia-media-padre">
            <div class="social-media">
                <a href="https://mx.linkedin.com/company/px-consultores" class="media"><img src="/build/img/linkedin.svg"></a>
                <a href="#" class="media"><img src="/build/img/whatsapp.svg"></a>
            </div>
        </div>
    <?php endif; ?>

    <?php echo $contenido; ?>

    <footer class="footer">
        <div class="seccion">
            <div class="barra_footer">
                <img src="/build/img/logo.png">
            </div>
            <div class="contenedor_nav">
                    <nav class="navegacion">
                        <a href="/" class="<?php if($inicio){ echo "active";} ?>">Main</a>

                        <?php if(!$adminsi): ?>
                            <a href="/nosotros" class="<?php if($nosotros){ echo "active";} ?>">Who are we?</a>
                        <?php endif; ?>

                        <?php if(!$adminsi): ?>
                            <a href="/contacto" class="<?php if($contacto){ echo "active";} ?>">Contact us</a>
                        <?php endif; ?>

                        <?php if($adminsi): ?>
                            <a href="/admin">Administration</a>
                        <?php endif; ?>
                        
                        <?php if($auth): ?>
                            <a href="/logout">Log Out</a>
                        <?php endif; ?>

                        <?php if($adminsi): ?>
                            <a href="/nuevo">New Account</a>
                        <?php endif; ?>
                    </nav>
                </div>
        </div>
        <p class="copyright">&copy;<?php echo date('Y'); ?> PX Consultores S.A. de C.V.</p>
    </footer>

    <script src="/build/js/app.js"></script>
</body>
</html>