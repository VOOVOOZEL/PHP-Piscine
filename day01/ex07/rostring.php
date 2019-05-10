#!/usr/bin/php
<?php
    if ($argc < 2){
        exit;
    }
    unset($argv[0]);
    $res = explode(" ", $argv[1]);
    $c = count($res);
    for ($i = 0; $i < $c; $i++){
        $tmp = $res[$i];
        $res[$i] = $res[$i + 1];
        $res[$i + 1] = $tmp;
    }
    foreach ($res as $r){
        $ret .= $r . " ";
    }
    echo trim(preg_replace('!\s+!', ' ', $ret)) . "\n";
?>