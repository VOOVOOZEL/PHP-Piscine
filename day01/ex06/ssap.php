#!/usr/bin/php
<?php
    if ($argc < 2){
        exit;
    }
    unset($argv[0]);
    foreach ($argv as $av){
        foreach (array_filter(explode(" ", $av)) as $word){
            $result[] = $word;
        }
    }
    sort($result);
    foreach ($result as $o){
        echo $o . "\n";
    }
?>