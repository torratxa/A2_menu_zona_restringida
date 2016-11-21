<?php
    include_once "dades.php";
    $dades = ( $_SERVER['REQUEST_METHOD'] == 'POST' );
    $dades_ok = $dades && isset( $_REQUEST['usuari'] ) && array_key_exists( $_REQUEST['usuari'], $usuaris ) && isset( $_REQUEST['contrasenya'] ) && $usuaris[$_REQUEST['usuari']] == $_REQUEST['contrasenya'];

    if ($dades )  {
        if ( $dades_ok ) {
            $usuari = $_REQUEST['usuari'];
            //iniciem la sessió
            session_start();
            $_SESSION["usuari"] = $usuari;

            header("Location: menu.php?usuari=$usuari");
            die();
        } else {
             header("Location: sortir.php");
            die();
        }
    }
    ?>