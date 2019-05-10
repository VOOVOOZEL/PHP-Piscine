#!/usr/bin/php
<?php
    if ($argc < 2){
        exit;
    }
    unset($argv[0]);
    $to_find = $argv[1];
    unset($argv[1]);
    $i = 0;
    $j = 0;
    $k = 0;
    foreach ($argv as $av){
        foreach (explode(":", $av) as $word){
            $result[] = $word;
        }
    }
    foreach($result as $r){
        if ($i % 2){
            $values[$k] = $r;
            $k++;
        }
        else{
            $keys[$j] = $r;
            $j++;
        }
        $i++;
    }
    while (--$j >= 0){
        if (strcmp($keys[$j], $to_find) == 0){
            echo $values[$j] . "\n";
            exit;
        }
    }
?>