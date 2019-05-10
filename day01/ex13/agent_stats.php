#!/usr/bin/php
<?php
if ($argc != 2){
   exit;
}

$i = 0;
$handle = fopen ("php://stdin","r");
fgets($handle);
while ($handle and !feof($handle)){
    $line = trim(fgets($handle));
    foreach (explode(";", $line) as $word){
        $result[$i][] = $word;
    }
    $i++;
}
foreach ($result as $k){
    $users[] = $k[0];
}
$c = count($users);
unset($users[$c-1]);
if (strcmp($argv[1],"average_user") == 0){
    $un_users = array_unique($users);
    foreach ($un_users as $u){
        $grade = 0;
        $count = 0;
        foreach ($result as $r){
            if (strcmp($r[0], $u) == 0){
                $grade +=$r[1];
                $count += 1;
            }
        }
        echo $u. ":" . $grade/$count . "\n";
    }
}
else if (strcmp($argv[1],"average") == 0){
    $main_grade = 0;
    $un_users = array_unique($users);
    foreach ($un_users as $u){
        $grade = 0;
        $count = 0;
        foreach ($result as $r){
            $grade +=$r[1];
            $count += 1;
        }
    }
    echo $grade/$count . "\n";
}
else if (strcmp($argv[1],"moulinette_variance") == 0){
    $un_users = array_unique($users);
    foreach ($un_users as $u){
        $grade = 0;
        $count = 0;
        foreach ($result as $r){
            if (strcmp($r[0], $u) == 0){
                $grade +=$r[1];
                $grade -=$r[3];
                $count += 1;
            }
        }
        echo $u. ":" . $grade/$count . "\n";
    }
}
