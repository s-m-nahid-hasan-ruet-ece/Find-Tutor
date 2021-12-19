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





 
 <!--  Log in -->

 <div class="container">
   <div class="title">Login</div>            
   <form action="login.php" method="post">
   <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

      <div class="login-details">
          <div class="input-box">
            <label class="details">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>"  class="text-input" >
          </div>
          <div class="input-box">
             <label class="details">Password</label>
             <input type="password" name="password" value="<?php echo $password; ?>"  class="text-input" >
          </div>            
      <div class="button-rgt">
         <button type="submit" name="login-btn">Login</button>
      </div>
   </div>
 </form>
</div>
  

<!--    // Log in  -->


      </div>   
   <!--   // Page Wrapper  -->





    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>