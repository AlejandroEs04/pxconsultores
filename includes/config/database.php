<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'Alejandroe2004ms*', 'pxconsultores');

    if(!$db) {
        phpinfo();
    }

    return $db;
}