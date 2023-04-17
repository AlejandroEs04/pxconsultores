<main>
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach;?>


    <form class="contenedor-formulario" method="POST" action="/<?php echo $tipo; ?>/crear">
        <fieldset class="formulario">
            <legend class="Titulo">Generar <?php echo $nombre ?></legend>
            <label><?php $tipo ?></label>
            <input type="text" name=" <?php echo $tipo; ?>[nom_<?php echo $tipo; ?>] " placeholder="Nombre">
        </fieldset>

        <div class="boton-centrado">
            <input type="submit" value="Generar <?php echo $nombre; ?>" class="boton boton-enviar">
        </div>
    </form>
</main>