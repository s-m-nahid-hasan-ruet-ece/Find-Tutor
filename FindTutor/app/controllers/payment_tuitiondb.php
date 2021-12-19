<?php


include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");




$table = 'payment_tuition';



$errors = array();



if (isset($_POST['payment-button'])) {

        unset($_POST['payment-button']);             
        $_POST['id'] = $_GET['id'];
        $_POST['payee_id'] =$_SESSION['id'];
        $user= create($table, $_POST);
        header('location: ' . BASE_URL . '/tuition_details.php?id='.$_GET['id']);

        exit();
    
}

?>