<?php
    require_once "data.php";
    
    if(!empty($_POST['inputPW'])){
        $inputPw = $_POST['inputPW'];
        $number = $_POST['number'];

        if($inputPw == $data[$number-1]->pw){
            array_splice($data, $number-1, 1);
            $dataJosn = json_encode($data);
            file_put_contents("../dailyfunding-guestbook/guestbook_data.json", $dataJosn);
            header('Location: ../dailyfunding-guestbook/index.html');
        } else{
            echo 'Try again!';
        }
    }
?>