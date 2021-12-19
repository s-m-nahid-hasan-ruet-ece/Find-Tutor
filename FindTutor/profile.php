<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php");


$user = selectOne('users', ['id' => $_SESSION['id']]);
$tutor =  selectOne('tutors', ['id' => $_SESSION['id']]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Aweasome-->
    <script src="https://kit.fontawesome.com/8f6c44eec4.js" crossorigin="anonymous"></script>

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@400;700&display=swap" rel="stylesheet">

    <!--  Custom Style-->
    <link rel="stylesheet" href="assets/css/style.css">



    <title>Find Tutor</title>
</head>
<body>
   
   
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>




   <!--  Page Wrapper  -->
     
      <div class="page-wrapper">

   <!--    Tutor Profile -->
   <div class="container">
      <div class="title">Profile Information</div>            
      <form action="#">
         <div class="available-tuitions">
            <div class="tuition-info photo">
               <img class="profile-pic" src="<?php echo BASE_URL . '/assets/images/' . $user['img']; ?>" alt="" class="post-image">
               </div>

            <div class="tuition-info type">
            <ul>
               <li><p>Name: </p></li>
                <li><p>District:</p></li>                  
                <li><p>Area:</p></li>                                  
                <li><p>Phone No.:</p></li>   
                <li><p>Email:</p></li>   
             </ul>
             </div>

             <div class="tuition-info data">
               <ul>
                  <li><p><?php echo $user['username']; ?></p></li>
                   <li><p><?php echo $user['district']; ?></p></li>
                   <li><p><?php echo $user['area']; ?></p></li>   
                   <li><p><?php echo $user['phone']; ?></p></li>
                   <li><p><?php echo $user['email']; ?></p></li>                              
                </ul>
                </div>                
      </div>
    </form>
</div>

 <!--  //Tutor Profile-->

 

 <?php if ($user['tutor'] ==1): ?>     
 <div class="container">
      <div class="title">Tuition Information</div>            
      <form action="#">
         <div class="available-tuitions">           

            <div class="tuition-info type">
            <ul>
               <li><p>Qualificaiton: </p></li>
                <li><p>Medium:</p></li>                  
                <li><p>Class:</p></li>                                  
                <li><p>Subject:</p></li>   
                <li><p>Salary-Range:</p></li> 
                <li><p>Gender:</p></li>   
                <li><p>Experience:</p></li> 
             </ul>
             </div>

             <div class="tuition-info data">
               <ul>
                  <li><p><?php echo $tutor['qualification']; ?></p></li>
                   <li><p><?php echo $tutor['medium']; ?></p></li>
                   <li><p><?php echo $tutor['class']; ?></p></li>   
                   <li><p><?php echo $tutor['subject']; ?></p></li>
                   <li><p><?php echo $tutor['salary']; ?></p></li>                              
                   <li><p><?php echo $tutor['gender']; ?></p></li>                              
                   <li><p><?php echo $tutor['experience']; ?></p></li>                              
                </ul>
                </div>                
      </div>
    </form>
</div>
<?php endif; ?>

      </div>   
   <!--   // Page Wrapper  -->





    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>