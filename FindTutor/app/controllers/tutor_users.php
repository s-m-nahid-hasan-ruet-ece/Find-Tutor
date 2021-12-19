<?php


include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");



$district = selectDist('districts');
$area = selectArea('upazilas');
$class = selectAll('classes');
$medium = selectAll('mediums');
$salary = selectAll('salary');
$subject = selectAll('subjects');


$table='tutors';

$errors = array();
$id = '';
$username = '';
$district_name='';
$area_name='';
$phone_no='';
$experience='';
$qualification='';
$tutor = '';
$email = '';
$password = '';
$passwordConf = '';




function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['tutor'] = $user['tutor'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    
        header('location: ' . BASE_URL . '/index.php');
    
    exit();
}


if (isset($_POST['register-btn'])) {
   // $errors = validateUser($_POST);
    
    
     
    if (count($errors) === 0) {
        unset($_POST['register-btn']);
                      
            $user_id = $_SESSION['id'];
            $_POST['id']=$user_id;                    
            $tutor_id= create($table, $_POST);


            header('location: ' . BASE_URL . '/index.php');
    
            exit();
        
    } else {
        $username = $_POST['username'];
       // $district_name = $_POST['district'];
       // $tutor = isset($_POST['tutor']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
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