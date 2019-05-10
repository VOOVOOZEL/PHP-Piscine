#!/usr/bin/php
<?php
while ($handle = fopen ("php://stdin","r")){
    echo "Enter a number: ";
    $line = trim(fgets($handle));
    if (feof($handle)){
        fclose($handle);
        exit;
    }
    else if(!is_numeric($line) and $handle){
        echo "'" . $line  . "' is not a number\n";
    }
    else if (!($line % 2) and is_numeric($line)){
        echo "The number " . $line  . " is even\n";
    }
    else if ($line % 2 and is_numeric($line)) {
        echo "The number " . $line  . " is odd\n";
    }
}
?>