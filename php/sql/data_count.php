<?php    
    $countQuery = "SELECT COUNT(*) FROM `guestbook`";
    $dataCount = mysqli_query($conn, $countQuery);
    $dataCount = mysqli_fetch_row($dataCount);
    $dataCount = $dataCount[0];

    mysqli_close($conn);
?>