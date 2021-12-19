<header>
       <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
            <h1 class="logo-text"><span class="span-first">Find</span><span class="span-second">Tutor</span></h1>
       </a>


       <div id="user_description" class="user">

       <?php if (isset($_SESSION['id'])): ?>       

       <li class="user-name">
            <a href="#">         
              <i class="fa fa-user"></i>
              <h7 id="user_name" class="user-text"> 
              <?php echo $_SESSION['username']; ?>
              </h7> 
              <i class="fa fa-chevron-down" style="font-size:0.8em;"></i>
            </a>
               <ul>
                <li><a href="<?php echo BASE_URL . '/profile.php' ?>">Profile</a></li>
                 <li><a href="#">Notifications</a></li>
                 <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>       
              </ul>
          </li>
          <?php else: ?>
  
         <div class="login">
           <ul><a href="<?php echo BASE_URL . '/registration_options.php' ?>">Sign Up</a></ul>
           <ul><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></ul>
        </div>
      
        <?php endif; ?>




       </div>

       <i class="fa fa-bars menu-toggle"></i>
         <ul id="nav-banner" class="navbar">    
            <div class="nav">
               <li><a href="<?php echo BASE_URL . '/index.php' ?>">HOME</a></li>
               <li><a href="<?php echo BASE_URL . '/search_tutor.php' ?>">SEARCH TUTOR</a></li>
               <li><a href="<?php echo BASE_URL . '/tutors.php' ?>">TUTORS</a></li>
               <li><a href="<?php echo BASE_URL . '/post_for_tuition.php' ?>">POST FOR TUITION</a></li>               
               <li><a href="<?php echo BASE_URL . '/available_tuitions.php' ?>">AVAILABLE TUITIONS</a></li>
               <li><a href="<?php echo BASE_URL . '/contact_us.php' ?>">CONTACT US</a></li>
               <li><a href="<?php echo BASE_URL . '/help.php' ?>">HELP</a></li>           
            </div>  
         </ul>
    </header>