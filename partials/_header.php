<?php
session_start();


echo '<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  
  <div class="container-fluid">
    
    <a class="navbar-brand" href="/donation">Ashtha</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/donation">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="donar.php">Donate</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="request.php">Request</a>
        </li>';

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true && $_SESSION['user_type']=="admin"){
        echo '
        <li class="nav-item">
          
          <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Admin Panel</button>


        </li>';}
        

        echo'<li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        
      </ul>
    </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      
      <div class="d-flex align-items-center ">';

      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo '<form class="d-flex align-items-center" role="search">
        
         <span class="text-white ms-2">Welcome, <h5>'. $_SESSION['name'].'</h5></span>
        <a href="partials/_logout.php" class="btn btn-light mx-2">Logout</a>
        
         </form>';
      } 
      else{
        echo'
          
        
        <button class="btn btn-light mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="btn btn-outline-light mr-2 " data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>';
      }
      echo'  </div>
    </div>
  </div>
</nav>';
//side panel for the admin panel
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
echo'<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h4 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
    
    <b> Welcome --'. $_SESSION['name'].' </h4> </b>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <hr>
    <p> <b> Admin Panel Funtions </b> </p>
      <a class="nav-link" href="adminpage1.php"><h5>Donar list</h5></a>
      <a class="nav-link" href="adminpage2.php"><h5>Request list</h5></a>
      <a class="nav-link" href="launch_event.php"><h5>Launch Event</h5></a>

  </div>
</div>';}

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations. You have successfully signed up. Now you can try to login.</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';};
        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false"){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Signup Failed! '. $_GET["error"].'</strong> You should check in  those fields and try again.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}        

?>