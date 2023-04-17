<main>
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="contenedor-formulario" method="POST" action="/codigo/crear">
        <fieldset class="formulario">
            <legend class="Titulo">Generar Codigo</legend>
            <legend>Producto</legend>
            <select name="codigo[producto]" id="producto">
                <option selected value="">-- Seleccione --</option>
                <?php foreach($productos as $producto) { ?>
                    <option <?php echo $codigo->producto === $producto->id ? 'selected' : '' ?> value="<?php echo s($producto->id); ?>"><?php echo s($producto->id*100) . "-" . s($producto->nom_producto); ?>
                <?php  } ?>
            </select>    

            <legend>Cliente</legend>
            <select name="codigo[cliente]" id="cliente">
                <option selected value="">-- Seleccione --</option>
                <?php foreach($clientes as $cliente) { ?>
                    <option <?php echo s($codigo->cliente === $cliente->id) ? 'selected' : '' ?> value="<?php echo s($cliente->id); ?>"><?php echo s($cliente->id*100) . "-" . s($cliente->nom_cliente); ?>
                <?php  } ?>
            </select>

            <legend>Proyecto</legend>
            <select name="codigo[proyecto]" id="proyecto">
                <option selected value="">-- Seleccione --</option>
                <?php foreach($proyectos as $proyecto) { ?>
                    <option <?php echo s($codigo->proyecto === $proyecto->id) ? 'selected' : '' ?> value="<?php echo s($proyecto->id); ?>"><?php echo s($proyecto->id*100) . "-" . $proyecto->nom_proyecto; ?>
                <?php  } ?>
            </select>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="codigo[nombre]" placeholder="Nombre de la pieza" value="<?php echo s($codigo->nombre); ?>"> 
        </fieldset>

        <div class="boton-centrado">
            <input type="submit" value="Generar Codigo" class="boton boton-enviar">
        </div>
    </form>
</main>