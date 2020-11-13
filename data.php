<?php
    $myfile = fopen("guestbook_data.json", "r");
    $data = json_decode(fread($myfile, filesize("guestbook_data.json")));
    fclose($myfile);
?>