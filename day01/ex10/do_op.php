#!/usr/bin/php
<?php
    if ($argc != 4){
        echo "Incorrect Parameters" . "\n";
        exit;
    }
    unset($argv[0]);
    foreach ($argv as $av){
        foreach (array_filter(explode(" ", $av)) as $word){
            $result[] = $word;
        }
    }
    if ($result[1] == '-'){
        echo ($result[0] - $result[1]) . "\n";
        exit;
    }
    else if ($result[1] == '+'){
        echo ($result[0] + $result[2]) . "\n";
        exit;
    }
    else if ($result[1] == '*'){
        echo ($result[0] * $result[2]) . "\n";
        exit;
    }
    else if ($result[1] == '/' and $result[2] != 0){
        echo ($result[0] / $result[2]) . "\n";
        exit;
    }
    else if ($result[1] == '%'){
        echo ($result[0] % $result[2]) . "\n";
        exit;
    }
    else {
        echo "Incorrect Parameters" . "\n";
        exit;
    }
?>