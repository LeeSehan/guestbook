<?php
    $conn = new mysqli("localhost", "root", "sehansql", 'dailyfunding_guestbook');

    $dataSelect = "SELECT `num`, `id`, `pw`, `title`, `content`, `date` FROM `guestbook` ORDER BY `date` ASC LIMIT $num, $finish";
    $dataQuery = mysqli_query($conn, $dataSelect);

    mysqli_close($conn);
?>