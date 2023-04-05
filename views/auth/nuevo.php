<main>
    <h1>Create a new account</h1>


        <form method="POST"  class="contenedor-formulario" action="/nuevo">
            <fieldset class="formulario">
                <legend class="Titulo">Ingresa tus datos</legend>
                <legend>Correo</legend> 
                <input type="email" name="usuarios[correo]" placeholder="Correo"> 

                <legend>Cliente</legend>
                <input type="password" name="usuarios[password]" placeholder="Password"> 
            </fieldset>

            <div class="boton-centrado">
                <input type="submit" value="Crear Cuenta" class="boton boton-enviar">
            </div>
        </form>
</main>