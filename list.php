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
    $data = json_decode(fread($myfile, filesize("../dailyfunding-guestbook/guestbook_data/$file")));
    echo "$data->title  $data->id $data->date".'<br />';
    fclose($myfile);
}
?>