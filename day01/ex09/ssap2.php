#!/usr/bin/php
<?php
    function    ft_compare($el1, $el2){
        $new_el1 = strtolower($el1);
        $new_el2 = strtolower($el2);
        $comp = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
        for ($i = 0; $el1[$i] && $el2[$i]; $i++) {
            $pos1 = strpos($comp, $new_el1[$i]);
            $pos2 = strpos($comp, $new_el2[$i]);
            if ($pos1 < $pos2)
                return (-1);
            else if($pos1 > $pos2)
                return (1);
        }
        return(0);
    }

    if ($argc < 2){
        exit;
    }
    unset($argv[0]);
    foreach ($argv as $av){
        foreach (array_filter(explode(" ", $av)) as $word){
            $result[] = $word;
        }
    }
    usort($result , "ft_compare");
    foreach ($result as $k){
        echo $k . "\n";
    }
?>