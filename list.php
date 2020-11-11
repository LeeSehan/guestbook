<?php
    // $_POST['NUM'];
    if( $num !== 0 ){
        $URL = $_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
        header("HTTP/1.1 307 Temporary move");
        header('Location: ../dailyfunding-guestbook/content.html');
    }
?>