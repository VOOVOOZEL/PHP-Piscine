<?php
function ft_is_sort($line){
    $tmp = $line;
    sort($tmp);
    $c = count($line);
    for ($i = 0; $i < $c; $i++){
        if ($tmp[$i] != $line[$i]){
            return (FALSE);
            exit;
        }
    }
    return (TRUE);
}
?>