#!/usr/bin/php
<?php
if ($argc != 2){
    exit;
}
// if ($argv[1] != "http://www.42.fr"){
//     exit;
// }
$html = file_get_contents($argv[1]);
$name = substr(strstr($argv[1], "//"), 2);
preg_match_all('/<img[^>]+>/i',$html, $result); 
$i = 0;
$img = array();
foreach ($result[0] as $line)
{
    $img[$i] = trim(preg_replace("( +)", " ", preg_replace("(\n+)", " ", $line)));
    preg_match_all('/src=("[^"]*")/i',$line, $img[$line]);
    $i++;
}
if(!is_dir($name)) {
    mkdir($name, 0777, true);
}
foreach ($img as $key ) {
    if (strlen($key[1][0]) > 1 && !strstr($key[1][0], "//")) {
        $key[1][0] = preg_replace("(\")", "", $key[1][0]);
        $tmp = strrchr($key[1][0], "/");
        $tmp = mb_substr($tmp, 1);
        if ($key[1][0][0] != '/'){
            $key[1][0] = $argv[1] . "/" . $key[1][0];
        }
        else {
            $key[1][0] = $argv[1] . $key[1][0];
        }
        $file = file_get_contents($key[1][0]);
        if (strlen($tmp) > 0) {
            file_put_contents($name . "/" .$tmp, $file);
        }
    }
}
?>