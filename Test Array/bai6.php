<?php
    $string = 'DeviveD';
    // $string = 'DevidMonster';
    $curentString = $string;
    for($i = 0; $i < strlen($string); $i++) {
        if($i+1 == strlen($string)-$i || $i == strlen($string)-$i) {
            break;
        }
        $tg = $string[$i];
        $string[$i] = $string[strlen($string)-($i+1)];
        $string[strlen($string)-($i+1)]= $tg;   
    }
    if($curentString == $string) {
        echo $curentString.' Là chuỗi Palindrome ';
    } else {
        echo $curentString.' Không phải là chuỗi Palindrome ';

    }