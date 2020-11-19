<?php
    if(!empty($_POST['id']) && !empty($_POST['pw']) && !empty($_POST['title']) && !empty($_POST['content'])){
        $id = $_POST['id'];
        $pw = $_POST['pw'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $dateString = date("Y-m-d h:i:s", time());
        require_once "../php/sql/input.php";
        header('Location: ../html/index.html?pageNum=0');
    } else{
        echo 'try again';
    }
?>