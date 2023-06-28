<?php 
    $resultado = $_GET['resultado'];
        if($resultado):
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje): ?>
                <p class="alerta exito"><?php echo $mensaje; ?></p>
        <?php endif;
    endif;
?>
<div class="formularioContactoInicio">
    <form class="contenedor-formulario" method="POST" action="/contacto">
        <legend>Contactanos</legend>
        <div class="inputForm">
           <label for="name">Name</label>
            <input type="text" name="contacto[nombre]" id="name" placeholder="Your Name"> 
        </div>
        
        <div class="inputForm">
            <label for="company">Company</label>
            <input type="text" name="contacto[company]" id="company" placeholder="Company">
        </div>

        <div class="inputForm">
            <label for="email">Email</label>
            <input type="email" name="contacto[email]" id="email" placeholder="Email">
        </div>

        <input type="submit" value="Iniciar Sesion" class="btnEnviar">
    </form>

    <div class="textoForm">
        <p><span>Gracias</span></p>
        <p>Nos pondremos en contacto lo antes posible con usted</p> 
        <img src="/build/img/LogoPXnew.png"> 
    </div>
    
</div>