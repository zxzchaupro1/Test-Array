<?php
    $arr = array(1,4,2,6,9,100,45,8,20);
    for ($i = 0; $i < count($arr); $i++) {
        for($j = $i +1; $j < count($arr); $j++) {
            if($arr[$i] < $arr[$j]) {
                $tg = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tg;
            }
        }
    }
    echo 'Phần tử lớn nhất trong mảng là: '.$arr[0];