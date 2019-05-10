<?php
    if ($_GET['action'] === "set"){
        if (!$_GET['name']){
            exit;
        }
        setcookie($_GET['name'], $_GET['value'], time() + 3600);
    }
    else if ($_GET['action'] === "get"){
        if (!$_COOKIE[$_GET['name']]){
            exit;
        }
        echo $_COOKIE[$_GET['name']] . PHP_EOL;
    }
    else if ($_GET['action'] === "del"){
        setcookie($_GET['name'], $_GET['value'], time() - 7200);
    }
?>