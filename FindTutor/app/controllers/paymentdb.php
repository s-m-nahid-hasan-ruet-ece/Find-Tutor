<?php


include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");




$table = 'payment';



$errors = array();





function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['tutor'] = $user['tutor'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if($_GET['option']==1)
        header('location: ' . BASE_URL . '/tutor_info.php');
    else
        header('location: ' . BASE_URL . '/index.php');

    
    exit();
}


if (isset($_POST['payment-button'])) {

        unset($_POST['payment-button']);   

          

           $_POST['tutor_id'] = $_GET['id'];
           $_POST['payee_id'] =$_SESSION['id'];
        //   dd($_POST);
            $user= create($table, $_POST);
            header('location: ' . BASE_URL . '/tutor_profile.php?id='.$_GET['id']);

            exit();
    
}



if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['email' => $_POST['email']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
           array_push($errors, 'Wrong credentials');
        }
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
}



?>