<?php 
include("path.php");
include(ROOT_PATH."/app/controllers/post_tuition.php");

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



<!--  Search Tutor -->



<div class="container">
 <div class="title post-tuition">TUITION INFORMATION</div>            
 <form action="post_for_tuition.php" method="post">




    <div class="user-details">


    <div  class="input-box">
         <label>District</label>
                <select name="district" class="text-input">                                                                                                                            
                  <option>All District</option>
                                <?php foreach ($district as $key => $district): ?>                                    
                                        <option value="<?php echo $district['name'] ?>"><?php echo $district['name'] ?></option>
                                <?php endforeach; ?>
                </select>            

         </div>   


         <div class="input-box">
      <label>Area</label>
              <select name="area" class="text-input">                                                                                              
                <option>All Area</option>
                <?// $area = selectArea('upazilas',$id); ?>
                <?php                         
                foreach ($area as $key => $area): ?>                                    
                     <option value="<?php echo $area['name'] ?>"><?php echo $area['name'] ?></option>
                <?php endforeach; ?>                      
              </select>                        
      </div>          


             
        <div  class="input-box">
       <label>Subject</label>
              <select name="subject" class="text-input">                                                                                                                            
                <option>All Subject</option>
                              <?php foreach ($subject as $key => $subject): ?>                                    
                                      <option value="<?php echo $subject['name'] ?>"><?php echo $subject['name'] ?></option>
                              <?php endforeach; ?>
              </select>            
       </div>   




       <div  class="input-box">
       <label>Class</label>
              <select name="class" class="text-input">                                                                                                                            
                <option>All Class</option>
                              <?php foreach ($class as $key => $class): ?>                                    
                                      <option value="<?php echo $class['name'] ?>"><?php echo $class['name'] ?></option>
                              <?php endforeach; ?>
              </select>            
       </div>   


       
       <div  class="input-box">
       <label>Medium</label>
              <select name="medium" class="text-input">                                                                                                                            
                <option>All Medium</option>
                              <?php foreach ($medium as $key => $medium): ?>                                    
                                      <option value="<?php echo $medium['medium_name'] ?>"><?php echo $medium['medium_name'] ?></option>
                              <?php endforeach; ?>
              </select>            
       </div>   




       <div class="input-box">
    <label>Salary</label>
            <select name="salary" class="text-input">                                                                                              
              <option>All Salary Range</option>
              <?// $area = selectArea('upazilas',$id); ?>
              <?php                         
              foreach ($salary as $key => $salary): ?>                                    
                   <option value="<?php echo $salary['salary_range'] ?>"><?php echo $salary['salary_range'] ?></option>
              <?php endforeach; ?>                      
            </select>                        
    </div>

    <div class="input-box">
    <label>Gender</label>
            <select name="gender" class="text-input">                                                                                              
              <option value="Gender" >Gender</option>                                
              <option value="Male">Male</option>
              <option value="Female">Female</option>                              
            </select>                        
    </div>

    
    <div class="input-box">
    <label>Hours(per week)</label>
            <select name="hour" class="text-input">                                                                                              
              <option value="Any hour" >Any hour</option>                                
              <option value="1 hour">1 hour</option>
              <option value="2 hours">2 hours</option>
              <option value="3 hours">3 hours</option>
              <option value="4 hours">4 hours</option>
              <option value="5 hours">5 hours</option>
              <option value="6 hours">6 hours</option>
              <option value="7 hours">7 hours</option>
              <option value="8 hours">8 hours</option>
              <option value="9 hours">9 hours</option>                                        
            </select>                        
    </div>

    <div class="input-box">
            <label class="details">Email</label>
            <input type="text" name="email"  class="text-input"  required class="name">
          </div>
          <div class="input-box">
            <label class="details">Phone No.</label>
            <input type="text" name="phone"  class="text-input"  required class="name">
          </div>

    <?php if (!empty($_SESSION['id'])): ?>

    <div class="button-rgt">
       <button type="submit" name="register-btn">Post For Tuition</button>
    </div>
    <?php else: ?>
    <div class="login-first">
        <h5>Login First to Post For Tuiton</h5>
    </div>
    <?php endif; ?>


 </div>
</form>
</div>




    </div>   
 <!--   // Page Wrapper  -->






    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>