<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php");


$tuitions = getAvailableTuitions();

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


      <?php foreach ($tuitions as $tuition): ?>
          <!--   Available Tuitions -->
          <div class="container">
            <form action="#">
               <div class="available-tuitions">                  

                  <div class="tuition-info type">
                  <ul>
                      <li><p>Subject:</p></li>
                      <li><p>District:</p></li>                  
                      <li><p>Area:</p></li>                  
                      <li><p>Class:</p></li>                  
                      <li><p>Salary-Range:</p></li>                  
                  
                   </ul>
                   </div>

                   <div class="tuition-info data">
                     <ul>                    
                         <li><p><?php echo $tuition['subject']; ?></p></li>
                         <li><p><?php echo $tuition['district']; ?></p></li>   
                         <li><p><?php echo $tuition['area']; ?></p></li>
                         <li><p><?php echo $tuition['class']; ?></p></li>                              
                         <li><p><?php echo $tuition['salary']; ?></p></li>
                      </ul>
                      </div>
                           
            </div>
           


            <div class="button-2">
               <input type="button" onclick="document.location=' <?php echo BASE_URL . '/tuition_details.php' . '?id='; echo $tuition['id']; ?>'" value="View Details" >
            </div>
          </form>
      </div>
      <?php endforeach; ?> 

       <!--  //Available Tuitions-->
        


      </div>   
   <!--   // Page Wrapper  -->





    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>