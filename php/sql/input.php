<?php
    require_once "../php/write.php";

    $conn = new mysqli("localhost", "root", "sehansql", 'dailyfunding_guestbook');
    $password = password_hash( $pw, PASSWORD_DEFAULT);
    $inputData = "INSERT INTO `guestbook` (`id`, `pw`, `title`, `content`, `date`) VALUES ('$id', '$password', '$title', '$content', '$dateString')";

    if(mysqli_query($conn, $inputData)){
        echo "성공";
    } else{
        echo "실패";
    }

    mysqli_close($conn);
?>