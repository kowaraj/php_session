<?php
    session_start();

if( isset($_SESSION['user_id']) )
{
    $uid = $_SESSION['user_id'];
    $upwd_k = 'user_pwd_'."{$uid}";
    if ( isset($_SESSION[$upwd_k]) )
    {
        $upwd_v = $_SESSION[$upwd_k];
        if ( $upwd_v == 1234 ) 
        {
            echo "Everything seems to be just fine!";
        } else {
            header('Location: public_wrong_password.php');
        }
    } else {
        header('Location: public_no_password.php');
    }
} else {
    header('Location: public_no_login.php');
}
?>