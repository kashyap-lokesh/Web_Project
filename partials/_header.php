<?php
session_start(); 
echo '
    <div class="header">
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Ideazzz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
    </div>
      ';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
      {
      echo '
          <div class="container" style="margin-left:850px">
           <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. ' </p>
           <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
           </div>
      ';}
      else
      {
         echo'
         <div class="container" style="margin-left:950px">
          <button class="btn btn-outline-success ml-2"  data-toggle="modal" data-target="#signUpModal">SignUp</button>
          <button class="btn btn-outline-success mx-2 " data-toggle="modal" data-target="#loginModal">Login</button>
          </div>';
      }

      echo '
    </div>
  </div>
</nav>';
      

include 'partials/_loginModal.php';
include 'partials/_signUpModal.php';

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
{
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}
?>