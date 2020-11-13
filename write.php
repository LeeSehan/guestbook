<?php
    if(!empty($_POST['id']) && !empty($_POST['pw']) && !empty($_POST['title']) && !empty($_POST['content'])){
        $id = $_POST['id'];
        $pw = $_POST['pw'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $dateString = date("Y-m-d h:i:s", time());
        $data = array('date'=>$dateString, 'id'=>$id, 'pw'=>$pw, 'title'=>$title, 'content'=>$content);
        $dataArr = json_decode(file_get_contents("guestbook_data.json"));
        array_push($dataArr, $data);
        $dataJosn = json_encode($dataArr);
        file_put_contents("../dailyfunding-guestbook/guestbook_data.json", $dataJosn);
        header('Location: ../dailyfunding-guestbook/index.html?pageNum=0');
    } else{
        echo 'try again';
    }
?>