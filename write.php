<?php
if(!empty($_POST['id']) && !empty($_POST['pw']) && !empty($_POST['title']) && !empty($_POST['content'])){
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $dateString = date("Y-m-d h:i:s", time());
    $file = "guestbook_data/{$title}.json";
    $data = array('date'=>$dateString, 'id'=>$id, 'pw'=>$pw, 'title'=>$title, 'content'=>$content);
    $dataJosn = json_encode($data);
    file_put_contents($file, $dataJosn);
    header('Location: ../dailyfunding-guestbook/index.html');
}
?>