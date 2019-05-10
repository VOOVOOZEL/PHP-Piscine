<?php
$vars = $_GET;
foreach ($vars as $key => $val){
    echo $key . ": " . $val . PHP_EOL;
}
?>