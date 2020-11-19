<?php
    $paging = $dataCount / 10;
    $pageNum = 1;
    if( $dataCount <= 10 ){
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