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
    echo "
    <table>
        <tr>
          <td>$data->title</td>
          <td>$data->id</td>
          <td>$data->date</td>
        </tr>
  </table>";
    fclose($myfile);
}
?>