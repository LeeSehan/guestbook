<?php
$list;
$dataDir = '../dailyfunding-guestbook/guestbook_data';
$openDir = opendir($dataDir);
if($openDir){
    $count = 0;
    while($readDir = readdir($openDir)) {
        if($readDir !== '.' && $readDir !== '..'){
            $count++;
            echo fileOpen($readDir);
        }
    }
    closedir($openDir);
}

function fileOpen($file){
    $myfile = fopen("../dailyfunding-guestbook/guestbook_data/$file", "r");
    $data = json_decode(fread($myfile, filesize("../dailyfunding-guestbook/guestbook_data/$file")));
    $dataList = "$data->title $data->id $data->date";
    fclose($myfile);
    return "
    <tr>
      <td>$data->title</td>
      <td>$data->id</td>
      <td>$data->date</td>
    </tr>";
}
?>