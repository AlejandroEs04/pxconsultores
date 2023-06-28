<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('162.241.217.234', 'ddcodeco_root', 'Alejandroe2004ms*', 'ddcodeco_pxconsultores');

    if(!$db) {
        phpinfo();
    }

    return $db;
}