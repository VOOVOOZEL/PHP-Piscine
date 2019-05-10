#!/usr/bin/php
<?php

if ($argc < 2 or !file_exists($argv[1])){
    exit;
}
$handle = fopen ($argv[1],"r");
while ($handle and !feof($handle)){
    $line .= trim(fgets($handle));
}
$line = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/", function($matches) {
    $matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/", function($matches) {
        return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
    }, $matches[0]);
    $matches[0] = preg_replace_callback("/(>)(.*?)(<)/", function($matches) {
        return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
    }, $matches[0]);
    return ($matches[0]);
}, $line);
echo $line;