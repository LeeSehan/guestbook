<?php
    $dataSelect = "SELECT `num`, `id`, `pw`, `title`, `content`, `date` FROM `guestbook` WHERE num=$hidNum";
    $dataQuery = mysqli_query($conn, $dataSelect);
    $contentData = mysqli_fetch_array($dataQuery);
?>