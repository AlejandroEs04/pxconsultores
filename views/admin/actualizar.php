<main>
    <h1>Actualizar Codigo</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="contenedor-formulario" method="POST" enctype="multipart/form-data">
        <p><?php echo $codigo->nombre; ?></p>
        <p>
            <?php echo $codigo->producto*100 . $codigo->cliente*100 . $codigo->proyecto*10;
                if($codigo->id>=10 && $codigo->id<=99) {
                    echo "00";
                } elseif($codigo->id>=100) {
                    echo "0";
                } else {
                    echo "000";
                }
                    echo $codigo->id; 
            ?>
        </p>
    <fieldset class="formulario">
            <legend class="Titulo">Actualizar Codigo</legend>
        
            <label for="calibre">Calibre:</label>
            <input type="text" id="calibre" name="codigo[calibre]" placeholder="Calibre" value="<?php echo s($codigo->calibre); ?>">
        </fieldset>
        <div class="boton-centrado">
            <input type="submit" value="Guardar Cambios" class="boton boton-enviar">
        </div>
    </form>
</main>