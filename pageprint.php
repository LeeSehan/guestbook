<?php
    require_once "data.php";
    
    $paging = count($data) / 10;
    $pageNum = 1;
    if( count($data) <= 10 ){
        echo "<span>";
        echo "[$pageNum]";
        echo "</span>";
    } else{
        while( $pageNum < $paging+1 ){
            echo "<span>";
            echo "[$pageNum]";
            echo "</span>";
            $pageNum++; 
            }
        }
?>