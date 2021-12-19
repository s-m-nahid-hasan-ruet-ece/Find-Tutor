<?php 
include("path.php");
include(ROOT_PATH."/app/controllers/search.php");
$tutors = getAvailableTutors();
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
   
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>   
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>






   <!--  Page Wrapper  -->
     
      <div class="page-wrapper">



        
<!--  Search Tutor -->

<div class="search-part-home">

<div class="container">
 <div class="titles">SEARCH TUTOR</div>            
 <form action="search_tutor.php" method="post">




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

   
    <div class="button-rgt1">
       <button type="submit" name="register-btn">Search Tutor</button>
    </div>



 </div>
</form>
</div>
</div>
<!--  ///  -->


  <!--   Available Tuitions -->

 <div class="available-tutors">AVAILABLE TUTORS</div>     

 <div class="grid-container">

 
 <?php foreach ($tutors as $tutor): ?>


<?php $tutor_basic_info = getAvailableTutorsUserInfo($tutor['id']); 
  //dd($tutor_basic_info);
?>

 
   <div class="containers tutorlist" onclick="document.location=' <?php echo BASE_URL . '/tutor_profile.php' . '?id='; echo $tutor['id']; ?>'">
     <form action="#">
        <div class="available-tuitions">
           <div class="tuition-info photo">
              <img src="<?php echo BASE_URL . '/assets/images/' . $tutor_basic_info[0]['img']; ?>" class="profile-pic" alt="" class="post-image">
              </div>

          

            <div class="tuition-info-home datas">
              <ul>                    
                  <li><p><?php echo $tutor_basic_info[0]['username']; ?></p></li>
                  <li><p><?php echo $tutor_basic_info[0]['district']; ?></p></li>   
                  <li><p><?php echo $tutor_basic_info[0]['area']; ?></p></li>
                  <li><p><?php echo $tutor['salary']; ?></p></li>
               </ul>
               </div>                
     </div>
         
   </form>
</div>
<?php endforeach; ?> 


 </div>
<!--  //Available Tuitions-->
 

                              



<!--  ////  -->





      </div>   
   <!--   // Page Wrapper  -->




   

    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>