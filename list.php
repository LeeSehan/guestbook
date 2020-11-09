<?php
$dataDir = '../dailyfunding-guestbook/guestbook_data';
$openDir = opendir($dataDir);
if($openDir){
    while($readDir = readdir($openDir)) {
        if($readDir !== '.' && $readDir !== '..'){
            fileOpen($readDir);
        }
    }
    closedir($openDir);
}

function fileOpen($file){
    $myfile = fopen("../dailyfunding-guestbook/guestbook_data/$file", "r");
     = fread($myfile, filesize("../dailyfunding-guestbook/guestbook_data/$file"))."<br>";
    fclose($myfile);
}
?>