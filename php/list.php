<?php
    $pageNum = $_GET['pageNum']+1;
    $num = $pageNum*10-10;
    $finish = $pageNum*10;
    
    require "../php/sql/data.php";
    while($list = mysqli_fetch_array($dataQuery)){
    echo "<tr>
        <td><input type='hidden' name='hidNum' value='".($list["num"])."' />
        ".($num+1)."</td>
        <td>"; echo $list["title"]; echo "</td>
        <td>"; echo $list["id"]; echo "</td>
        <td>"; echo $list["date"]; echo "</td>
    </tr>";
      $num++;
    }
?>