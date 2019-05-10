#!/usr/bin/php
<?php
$handle = fopen("/var/run/utmpx", 'r');
date_default_timezone_set("Europe/Moscow");
while ($str = fread($handle, 628)) {
    $elem = unpack("a256user/a4id/a32line/ipid/itype/Itime", $str);
    if ($elem[type] == 7) {
        echo "$elem[user] $elem[line]  ". date('M  j H:i', $elem[time])."\n";
    }
}
?>