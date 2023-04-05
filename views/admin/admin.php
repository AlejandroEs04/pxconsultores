<main class="admin">
    <div class="mensaje">
        <div class="mensaje_flotante">
            <h3>¿Que proyecto quieres descargar?</h3>
            <form class="formulario-flotante" method="POST" action="/admin/export">
                <legend>Selecciona el proyecto</legend>
                <select name="excel">
                    <?php foreach($proyectos as $proyecto): ?>
                        <option value="<?php echo $proyecto->id; ?>"><?php echo $proyecto->nom_proyecto; ?></option>
                    <?php endforeach; ?>
                </select>
                
                <button type="submit" name="export_data" value="Exportar a Excel">Exportar a Excel</button>
            </form>
        </div>
    </div>
        <h1>Administration</h1>
        <?php 
            if($resultado):
                $mensaje = mostrarNotificacion( intval( $resultado) );
                if($mensaje): ?>
                    <p class="alerta exito"><?php echo $mensaje; ?></p>
                <?php endif;
            endif;
        ?>
        <div class="botones">
            <a href="/codigo/crear" class="boton boton-naranja">Nueva Pieza</a>
            <a href="/producto/crear" class="boton boton-azul">Nuevo Producto</a>
            <a href="/admin/clientes/crear.php" class="boton boton-perryelornitorrinco">Nuevo Cliente</a>
            <a href="/admin/proyectos/crear.php" class="boton boton-morado">Nuevo Proyecto</a>
        </div>
        <div>
            <div class="contenido_admin">
                <h2>Consecutivo</h2>
                <table class="piezas">
                    <thead class="tabla">
                        <tr>
                            <th>ID</th>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Producto</th>
                            <th>Proyecto</th>
                        </tr>
                    </thead>

                    <div class="contenedor-barra">
                        <input id="searchbar" onkeyup="search_barra()" type="text" name="search" placeholder="Busqueda" class="barra-busqueda">
                    </div>

                    
                    <button type="submit" name="export_data" value="Exportar a Excel" class="boton-export">Exportar a Excel</button>
                    

                    <tbody class="tabla" id="list">
                        <?php 
                            foreach(array_reverse($codigos) as $codigo): 
                        ?>
                            <tr class="no">
                                <td class="codigo"><?php echo $codigo->producto*100 . $codigo->cliente*100 . $codigo->proyecto*10;
                                if($codigo->id>=10 && $codigo->id<=99) {
                                    echo "00";
                                } elseif($codigo->id>=100) {
                                    echo "0";
                                } else {
                                    echo "000";
                                }
                                echo $codigo->id; ?></td>
                                <td>A00</td>
                                <td><?php echo $codigo->nombre?></td>
                                <td>
                                    <?php
                                        $productoid = $codigo->producto-1;
                                        echo($productos[$productoid]->nom_producto);
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        $proyectoid = $codigo->proyecto-1;
                                        echo($proyectos[$proyectoid]->nom_proyecto);
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        <div class="contenedor_admin">
            <div class="contenido_admin">
                <h2>Productos</h2>
                <div class="hide-tab">
                    <img src="build/img/downarrow_120663.svg" alt="mostrar tablas">
                </div>
                <table class="productos hide">
                    <thead class="tabla">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>

                    <tbody class="tabla">
                        <?php foreach($productos as $producto): ?>
                        <tr>
                            <td><?php echo $producto->id*100; ?></td>
                            <td><?php echo $producto->nom_producto; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="contenido_admin">
                <h2>Proyectos</h2>
                <div class="hide-tab1">
                    <img src="build/img/downarrow_120663.svg" alt="mostrar tablas">
                </div>
                <table class="proyectos hide1">
                    <thead class="tabla">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>

                    <tbody class="tabla">
                        <?php foreach($proyectos as $proyecto): ?>
                        <tr>
                            <td><?php echo $proyecto->id*100; ?></td>
                            <td><?php echo $proyecto->nom_proyecto; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="contenido_admin">
                <h2>Clientes</h2>
                <div class="hide-tab2">
                    <img src="build/img/downarrow_120663.svg" alt="mostrar tablas">
                </div>
                <table class="clientes hide2">
                    <thead class="tabla">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>

                    <tbody class="tabla">
                        <?php foreach($clientes as $cliente): ?>
                        <tr>
                            <td><?php echo $cliente->id*100; ?></td>
                            <td><?php echo $cliente->nom_cliente; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>