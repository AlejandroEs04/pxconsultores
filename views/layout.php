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
    <link rel="icon" href="../build/img/PXicon.ico">
    <title>PX Consultores</title>
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
                        <a href="/nosotros" class="<?php if($nosotros){ echo "active";} ?>">About Us</a>
                        <a href="/contacto" class="<?php if($contacto){ echo "active";} ?>">Contact us</a>
                    <?php endif; ?>

                    <?php if($adminsi): ?>
                        <a href="/admin">Administration</a>
                        <a href="/nuevo">New Account</a>
                    <?php endif; ?>
                    
                    <?php if($auth): ?>
                        <a href="/logout">Log Out</a>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </header>

    <?php if(!$adminsi): ?>
        <div class="contenedor-social-media" id="socia-media-padre">
            <div class="social-media">
                <a href="https://mx.linkedin.com/company/px-consultores" class="media"><img src="/build/img/linkedin.svg"></a>
            </div>
        </div>
    <?php endif; ?>

    <main>
        <?php echo $contenido; ?>
    </main>

    

    <footer class="footer">
        <div class="seccion">
            <div class="barra_footer">
                <img src="/build/img/LogoPXnew.png"> 
            </div>
            <div class="contenedor_nav">
                    <nav class="navegacion">
                        <a href="/">Main</a>

                        <?php if(!$adminsi): ?>
                            <a href="/nosotros">About Us</a>
                        <?php endif; ?>

                        <?php if(!$adminsi): ?>
                            <a href="/contacto">Contact us</a>
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
        <div class="infoFooter">
            <div class="ddCode">
                <p>Create by: D<span>D</span>-Code</p>
                <a href="https://www.dd-code.com/">Visitanos en DD-Code</a>
            </div>
            <p class="copyright">&copy;<?php echo date('Y'); ?> PX Consultores S.A. de C.V.</p>
        </div>
        
    </footer>

    <script src="/build/js/app.js"></script>
</body>
</html>