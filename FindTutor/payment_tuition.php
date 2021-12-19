<?php 
include("path.php");
include(ROOT_PATH."/app/controllers/payment_tuitiondb.php");


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
       
   <div class="wrapper">
   <h2>
Payment Form</h2>
<form action=" <?php echo 'payment_tuition.php' . '?id='; echo $_GET['id']; ?> " method="post">
            <h4 class="h4-class">
Account</h4>
<div class="input-group">
                <div class="input-box-payment">
                    <input  type="text" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
<div class="input-box-payment">
                    <input type="text" placeholder="Nick Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
</div>
<div class="input-group">
                <div class="input-box-payment">
                    <input type="email" placeholder="Email Adress" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
</div>
<div class="input-group">
                <div class="input-box-payment">
                    <h4>
Date of Birth</h4>
<input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>
<div class="input-box-payment">
                    <h4 class="h4-class">
Gender</h4>
<input type="radio" id="b1"  checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2"  class="radio">
                    <label for="b2">Female</label>
                </div>
</div>
<div class="input-group">
                <div class="input-box-payment">
                    <h4 class="h4-class">
Payment Details</h4>
<input type="radio"  id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                </div>
</div>
<div class="input-group">
                <div class="input-box-payment">
                    <input type="tel" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
</div>
<div class="input-group">
                <div class="input-box-payment">
                    <input type="tel" placeholder="Card CVC" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
<div class="input-box-payment">
                    <select>
                        <option>01 jun</option>
                        <option>02 jun</option>
                        <option>03 jun</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                </div>
</div>
<div class="input-group">
                <div class="input-box-payment">
                    <button class="payment-button" name="payment-button" type="submit">PAY NOW</button>
                </div>
</div>
</form>

    </div>   
   <!--   // Page Wrapper  -->





    
   <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



   <!--  JQuerry  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  Custom JS-->
    <script src="assets/js/scripts.js"></script>


</body>
</html>