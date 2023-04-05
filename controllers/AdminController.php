<?php

namespace Controllers;
use Model\Cliente;
use Model\Codigo;
use Model\Producto;
use Model\Proyecto;
use MVC\Router;

class AdminController {
    public static function admin(Router $router) {
        $productos = Producto::all();
        $proyectos = Proyecto::all();
        $clientes = Cliente::all();
        $codigos = Codigo::all();

        $adminsi = true;

        $resultado = null;

        // Muiestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;

        $router->render('admin/admin', [
            'resultado' => $resultado,
            'adminsi' => true,
            'productos' => $productos,
            'proyectos' => $proyectos,
            'clientes' => $clientes,
            'codigos' => $codigos
        ]);
    }

    public static function export(Router $router) {

        $productos = Producto::all();
        $proyectos = Proyecto::all();
        $clientes = Cliente::all();
        $codigos = Codigo::all();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            header("Pragma: public");
            header("Expires: 0");
            $filename = "Nomenclatura.xls";
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=$filename");
            header("Pragma: no-cache");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

        }

        ?>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Producto</th>
                        <th>Proyecto</th>
                        <th>Fecha</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        foreach(array_reverse($codigos) as $codigo): 
                    ?>
                        <tr>
                            <td><?php echo $codigo->id; ?></td>
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
                            <th><?php echo $codigo->fecha; ?></th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php
    }
}