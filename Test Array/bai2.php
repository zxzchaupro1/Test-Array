<?php
    $arr = array(1,4,2,6,9,100,4);
    for($i=0; $i < count($arr); $i++) {
        if($i+1 == count($arr)-$i || $i == count($arr)-$i) {
            break;
        }
        $tg = $arr[$i];
        $arr[$i] = $arr[count($arr)-($i+1)];
        $arr[count($arr)-($i+1)]= $tg;   
    }
    
    echo 'Mảng sau khi sắp xếp: ';
    foreach($arr as $value) {
        echo $value.', ';
    }