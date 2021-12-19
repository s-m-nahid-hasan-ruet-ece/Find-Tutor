<?php


include(ROOT_PATH . "/app/database/db.php");



$district = selectDist('districts');
$area = selectArea('upazilas');
$class = selectAll('classes');
$medium = selectAll('mediums');
$salary = selectAll('salary');
$subject = selectAll('subjects');


$table='tutors';

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

//$posts = selectAll('posts', ['published' => 1]);



if (isset($_POST['register-btn'])) {    

        unset($_POST['register-btn']);  
        
        if($_POST['subject'] == "All Subject")
           unset($_POST['subject']);  


        if($_POST['class'] == "All Class")
           unset($_POST['class']);  
        
        if($_POST['medium'] == "All Medium")
           unset($_POST['medium']);  

        
        if($_POST['salary'] == "All Salary Range")
           unset($_POST['salary']);  

        if($_POST['gender'] == "Gender")
           unset($_POST['gender']);  

        if($_POST['district'] == "All District")
           unset($_POST['district']);  

        if($_POST['area'] == "All Area")
           unset($_POST['area']);  

        
        if($_POST['hour'] == "Any hour")
           unset($_POST['hour']);  
        
        

        $conditon_array = $_POST;    
        
        $records = search('tutors','users',$conditon_array);

        $_SESSION['search']=$records;

               
            header('location: ' . BASE_URL . '/search_results.php');
            exit();
        
    
}



?>