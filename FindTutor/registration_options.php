<?php 
include("path.php");
include(ROOT_PATH."/app/controllers/users.php");
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




   <!--  Page Wrapper  -->
     
      <div class="page-wrapper">


  <!--  Registration -->

  <div class="container">
   <div class="title">Select Your Option</div>            
   <form action="registration_options.php" method="post">
            
        <ul class="options">
             <li><a href="<?php echo BASE_URL . '/registration.php?option=1' ?>">I want to be a tutor</a></li>
             <li><h5 class="or">OR</h5></li>
             <li><a href="<?php echo BASE_URL . '/registration.php?option=0' ?>">I need a tutor</a></li>
        </ul>
      
   </div>
 </form>
</div>
  

<!--    // Registration  

<div class="button-rgt">
         <button type="submit" name="register-btn">Submit</button>
      </div>

-->


      </div>   
   <!--   // Page Wrapper  -->





    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>

