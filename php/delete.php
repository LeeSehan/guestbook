<?php
    if(!empty($_POST['inputPW'])){
        $inputPw = $_POST['inputPW'];
        $queryString = $_POST['clickNumber']-1;

        $conn = new mysqli("localhost", "root", "sehansql", 'dailyfunding_guestbook');
        require_once "../php/sql/content_data.php";

        if(password_verify($inputPw, $contentData[1])){
            $deleteSelect = "DELETE FROM guestbook WHERE num = '$contentData[5]'";
            mysqli_query($conn, $deleteSelect);
            mysqli_close($conn);
            header('Location: ../html/index.html?pageNum=0');
        } else{
            echo 'Try again!';
        }
    }
?>