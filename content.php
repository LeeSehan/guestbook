<?php
    require_once "data.php";
    $title = $data[$_SERVER['QUERY_STRING']-1]->title;
    $user = $data[$_SERVER['QUERY_STRING']-1]->id;
    $date = $data[$_SERVER['QUERY_STRING']-1]->date;
    $content = $data[$_SERVER['QUERY_STRING']-1]->content;
    
    $list = array( 
        "title" => $title,
        "user" => $user,
        "date" => $date,
        "content" => $content
    );
    echo json_encode($list);
?>
