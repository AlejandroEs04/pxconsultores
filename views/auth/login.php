<main>
    <h1>Login</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="contenedor-formulario" method="POST" action="/login">
            <fieldset class="formulario">
                <legend class="Titulo">Ingresa tus datos</legend>
                <legend>Correo</legend> 
                <input type="email" name="usuarios[correo]" placeholder="Correo"> 

                <legend>Cliente</legend>
                <input type="password" name="usuarios[password]" placeholder="Password"> 
            </fieldset>

            <div class="boton-centrado">
                <input type="submit" value="Iniciar Sesion" class="boton boton-enviar">
            </div>
        </form>
</main>