<?php
    if ($_POST['submit'] === 'OK'){
        $login = $_POST['login'];
        $pass = hash('sha256' ,$_POST['passwd']);
        if (!file_exists('../private/')){
            mkdir('../private/');
        }
        if (file_exists('../private/passwd')){
            $arr = unserialize(file_get_contents('../private/passwd'));
            if ($arr != NULL){
                foreach ($arr as $val){
                    if ($val['login'] === $login){
                        echo 'ERROR' . PHP_EOL;
                        exit();
                    }
                }
            }
        }
        $new_usr = array('login' => $login, 'passwd' => $pass);
        $arr[] = $new_usr;
        file_put_contents('../private/passwd', serialize($arr));
        echo 'OK' . PHP_EOL;
    }
    else {
        echo 'ERROR' . PHP_EOL;
    }
?>