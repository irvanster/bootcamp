<?php

if (isset($_POST['validate']))
{

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $validate = $_POST['validate'];

if ($username=="" || $email=="" || $phone_number=="")
{
    echo 'gagal';
}else
{
    if(preg_match('/[A-Z]/', $username)){
        echo ' username invalid';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ' email invalid';
    }elseif (preg_match('/[A-Z]/', $email)) {
        echo ' email invalid';
    }
    if(!preg_match('/^[0-9 +]*$/', $phone_number)){
        echo 'not valid';
    }
}

}

?>
