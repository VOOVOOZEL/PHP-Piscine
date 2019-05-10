#!/usr/bin/php
<?php
    if ($argc != 2){
        echo "Incorrect Parameters" . "\n";
        exit;
    }
    preg_match_all('/-?[0-9]+/', $argv[1], $digits);
    preg_match_all('/[#$^&_()=\';,.{}|":<>?~\\\\A-Za-z]/', $argv[1], $alph);
    preg_match_all('/\\*|\\/|\\+|\\-|\\%/', $argv[1], $sign);
    if (count($sign[0]) > 3 or count($alph[0]) > 0 or count($digits[0]) != 2 or (!is_numeric($digits[0][0]) and !is_numeric($digits[0][1]))){
        echo "Syntax Error" . "\n";
        exit;
    }
    if (count($sign[0]) > 1 and $digits[0][0] > 0 and $digits[0][1] > 0){
        echo "Syntax Error" . "\n";
        exit;
    }
    if (count($sign[0]) > 2 and ($digits[0][0] > 0 or $digits[0][1] > 0)){
        echo "Syntax Error" . "\n";
        exit;
    }
    if ($digits[0][0] < 0 ){
        $sign[0][0] = $sign[0][1];
    }
    if ($sign[0][0] == '-'){
        echo ($digits[0][0] - $digits[0][1]) . "\n";
        exit;
    }
    else if ($sign[0][0] == '+'){
        echo ($digits[0][0]  + $digits[0][1]) . "\n";
        exit;
    }
    else if ($sign[0][0] == '/' and $digits[0][1] != 0){
        echo ($digits[0][0]  / $digits[0][1]) . "\n";
        exit;
    }
    else if ($sign[0][0] == '%'){
        echo ($digits[0][0]  % $digits[0][1]) . "\n";
        exit;
    }
    else if ($sign[0][0] == '*'){
        echo ($digits[0][0]  * $digits[0][1]) . "\n";
        exit;
    }
    else if ($digits[0][1] == 0){
        exit;
    }
    else {
        echo "Syntax Error" . "\n";
        exit;
    }
?>