<?php
    session_start();
    if ($_GET['submit'] === 'OK'){
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd']= $_GET['passwd'];
    }
?>
<html>
    <body>
        <form method="GET" action="index.php">
            <input type="text" name="login" value="<?php echo $_SESSION['login']?>">
            <br />
            <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']?>">
            <input type="submit" name="submit" value="OK">
        </form>
    </body>
</html>