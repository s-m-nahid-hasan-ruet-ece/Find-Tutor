<?php


include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");




$table = 'tuitions';


$district = selectDist('districts');
$area = selectArea('upazilas');
$class = selectAll('classes');
$medium = selectAll('mediums');
$salary = selectAll('salary');
$subject = selectAll('subjects');


if (isset($_POST['register-btn'])) {
 

   
    unset($_POST['register-btn']); 

    $_POST['user_id']=$_SESSION['id'];
    if($_POST['gender']=='Gender')
    {
        $_POST['gender']="Any";
    }
    $user_id = create($table, $_POST);
    
    $_SESSION['message']='Your required tuition has been posted. You can find it in AVAILABLE TUITIONS';
    $_SESSION['type']='success';
    header('location: ' . BASE_URL . '/index.php');

    exit();
}


?>