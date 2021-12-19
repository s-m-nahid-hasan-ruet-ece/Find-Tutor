<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php");


$user = selectOne('tuitions', ['id' => $_GET['id']]);

if(!empty($_SESSION['id']))
{
   $conditon=[
      'id' =>  $user['id'],
      'payee_id' =>  $_SESSION['id']
   ];
   
   $payment =  selectOne('payment_tuition', $conditon);
}



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
      <div class="title">Tuition Information</div>            
      <form action="#">
         <div class="available-tuitions">
           
            <div class="tuition-info type">
            <ul>
                <li><p>Class:</p></li>    
                <li><p>Medium:</p></li>                      
                <li><p>Subject:</p></li>      
                <li><p>District:</p></li>                  
                <li><p>Area:</p></li>              
                <li><p>Salary-Range:</p></li>    
                <li><p>Gender:</p></li>                            
                <li><p>Hours(per week):</p></li>                            
                <li><p>Phone No.:</p></li>   
                <li><p>Email:</p></li>   
             </ul>
             </div>

             <div class="tuition-info data">
               <ul>
                  <li><p><?php echo $user['class']; ?></p></li>
                   <li><p><?php echo $user['medium']; ?></p></li>
                   <li><p><?php echo $user['subject']; ?></p></li>                    
                   <li><p><?php echo $user['district']; ?></p></li>                    
                   <li><p><?php echo $user['area']; ?></p></li>                    
                   <li><p><?php echo $user['salary']; ?></p></li>                    
                   <li><p><?php echo $user['gender']; ?></p></li>                    
                   <li><p><?php echo $user['hour']; ?></p></li>                    
                   <?php if (!empty($payment) || $user['user_id']==$_SESSION['id']): ?>     
                   <li><p><?php echo $user['phone']; ?></p></li>
                   <li><p><?php echo $user['email']; ?></p></li>
                   <?php else: ?>
                   <li><p>Hidden</p></li>
                   <li><p>Hidden</p></li>
                   <?php endif; ?>

                </ul>
                </div>                
      </div>            
      <?php if (!empty($_SESSION['id']) && empty($payment) && $_SESSION['id']!=$user['user_id']): ?>
      <div class="button-2">
      <input type="button" onclick="document.location=' <?php echo BASE_URL . '/payment_tuition.php' . '?id='; echo $user['id']; ?>'" value="Get Contact Info" >
            </div>
      <?php endif; ?>                 
            <?php if(empty($_SESSION['id'])): ?>
               <div class="button-2">
               <input type="button" onclick="document.location=' <?php echo BASE_URL . '/login.php' ; ?>'" value="Login to Get Contact Info" >
            </div>


            <?php endif; ?>
    </form>
    
</div>

 <!--  //Tutor Profile-->

 

      </div>   
   <!--   // Page Wrapper  -->





    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>