<?php
    $URL = $_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
    header("HTTP/1.1 307 Temporary move");
    header('Location: ../dailyfunding-guestbook/index.html');
?>