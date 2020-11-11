<?php
    $myfile = fopen("guestbook_data.json", "r");
    $data = json_decode(fread($myfile, filesize("guestbook_data.json")));
    // $dataList = "$data->title $data->id $data->date";
    // echo $data[1]->title;
    fclose($myfile);
?>