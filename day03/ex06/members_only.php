<?php
    if ($_SERVER['PHP_AUTH_USER'] == 'zaz' and $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys'){
?>
<html><body>
Hello Zaz<br />
<?php
    echo '<img src= data:image/png;base64,' . base64_encode(file_get_contents("../img/42.png")) . '>';
?>
</body></html>
<?php
    exit;
    }
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body>That area is accessible for members only</body></html>" . PHP_EOL;
?>