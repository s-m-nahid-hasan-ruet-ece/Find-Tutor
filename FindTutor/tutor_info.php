<?php 
include("path.php");
include(ROOT_PATH."/app/controllers/tutor_users.php");

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
   <div class="title">Tutor Information</div>            
   <form action="tutor_info.php" method="post">
   <?php// include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>



      <div class="user-details">


         <div class="input-box">
            <label class="details">Qualificaiton</label>
            <input type="text" name="qualification"  class="text-input" >
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
                <option value="" >Select Your Gender</option>                                
                <option value="Male">Male</option>
                <option value="Female">Female</option>                              
              </select>                        
      </div>



      <label class="details-experience">Experience</label>
       <textarea rows="4" name="experience" class="text-input contact-input" placeholder="Tell about your experience...."></textarea>



       
       
       

      <div class="button-rgt">
         <button type="submit" name="register-btn">Submit</button>
      </div>



   </div>
 </form>
</div>
  

<!--    // Registration  -->


      </div>   
   <!--   // Page Wrapper  -->





    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>

