<?php


include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");




$table = 'users';


$district = selectDist('districts');
$area = selectArea('upazilas');

$errors = array();
$id = '';
$username = '';
$district_name='';
$area_name='';
$phone_no='';
$class='';
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

    if($_GET['option']==1)
        header('location: ' . BASE_URL . '/tutor_info.php');
    else
        header('location: ' . BASE_URL . '/index.php');

    
    exit();
}


if (isset($_POST['register-btn'])) {
    $errors = validateUser($_POST);
    


    if (!empty($_FILES['img']['name'])) {
        $image_name = time() . '_' . $_FILES['img']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['img']['tmp_name'], $destination);

        if ($result) {
           $_POST['img'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
       array_push($errors, "Post image required");
    }
     
    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
          if($_GET['option']==1)
            $_POST['tutor'] = 1;
          else
            $_POST['tutor']= 0;

          //  dd($_POST);

            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
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