<?php
    if ($_POST['submit'] === 'OK'){
        $login = $_POST['login'];
        $old_pass = hash('sha256' ,$_POST['oldpw']);
        $new_pass = hash('sha256' ,$_POST['newpw']);
        if (!file_exists('../private/')){
            mkdir('../private/');
        }
        if (file_exists('../private/passwd')){
            $arr = unserialize(file_get_contents('../private/passwd'));
            if ($arr != NULL){
                foreach ($arr as $key => $val){
                    if ($val['login']=== $login and $val['passwd'] === $old_pass){
                        $arr[$key]['passwd'] = $new_pass;
                        file_put_contents('../private/passwd', serialize($arr));
                        echo "OK" . PHP_EOL;
                        exit();
                    }
                }
            }
            echo 'ERROR' . PHP_EOL;
            exit;
        }
        echo 'ERROR' . PHP_EOL;
        exit;

    }
    else {
        echo 'ERROR' . PHP_EOL;
    }
?>