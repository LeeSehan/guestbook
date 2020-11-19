<?php
    $hidNum = $_SERVER['QUERY_STRING'];

    $conn = new mysqli("localhost", "root", "sehansql", 'dailyfunding_guestbook');
    require_once "../php/sql/content_data.php";
    
    $list = array( 
        "title" => $contentData["title"],
        "user" => $contentData["id"],
        "date" => $contentData["date"],
        "content" => $contentData["content"]
    );
    echo json_encode($list);
    mysqli_close($conn);
?>
