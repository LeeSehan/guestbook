<?php
    require_once "data.php";

    $pageNum = $_GET['pageNum']+1;
    $num = $pageNum*10-10;
    $start = $pageNum*10-9;
    $finish = $pageNum*10;
    while($start <= $finish && count($data) !== 0){
    echo "<tr>
        <td>"; echo $num+1; echo "</td>
        <td>"; echo $data[$num]->title; echo "</td>
        <td>"; echo $data[$num]->id; echo "</td>
        <td>"; echo $data[$num]->date; echo "</td>
    </tr>";
      if($num == count($data)-1){
        break;
      }
      $num++;
      $start++;
    }
?>