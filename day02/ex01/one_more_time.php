#!/usr/bin/php
<?php
    if ($argc != 2){
        exit;
    }
    date_default_timezone_set('Europe/Paris');
    preg_match('/[l|L]undi|[m|M]ardi|[m|M]ercredi|[j|J]eudi|[v|V]endredi|[s|S]amedi|[d|D]imanche/',
    $argv[1], $week_day);
    preg_match(
        '/[j|J]anvier|[f|F][é|e]vrier|[m|M]ars|[a|A]vril|[m|M]ai|[j|J]uin|[j|J]uillet|[a|A]o[û|u]t|[s|S]eptembre|[o|O]ctobre|[n|N]ovembre|[d|D][é|e]cembre/',
        $argv[1], $month);
    preg_match('/([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]?/', $argv[1], $time);
    preg_match('([0-9]{4}\+?)', $argv[1], $year);
    $m_dict = [
        "janvier" => "1",
        "février" => "2",
        "mars" => "3",
        "avril"=> "4",
        "mai" => "5",
        "juni" => "6",
        "juillet" => "7",
        "août" => "8",
        "septembre" => "9",
        "octobre" => "10",
        "novembre" => "11",
        "décembre" => "12",
    ];
    $d_dict = [
        "lundi" => "1",
        "mardi" => "2",
        "mercredi" => "3",
        "jeudi"=> "4",
        "vendredi" => "5",
        "samedi" => "6",
        "dimanche" => "7",
    ];
    if (count($month) > 1 or count($time) > 2 or count($year) > 1){
        echo "Wrong Format" . "\n";
        exit;
    }
    if (!checkdate($m_dict[strtolower($month[0])], $time[1], $year[0])){
        echo "Wrong Format" . "\n";
        exit;
    }
    $sec = mktime(explode(":", $time[0])[0], explode(":", $time[0])[1],
    explode(":", $time[0])[2], $m_dict[strtolower($month[0])], $time[1], $year[0]);

    $dayofweek = date('w', $sec);
    if ($d_dict[strtolower($week_day[0])] != $dayofweek){
        echo "Wrong Format" . "\n";
        exit;
    }
    echo $sec . "\n";
?>