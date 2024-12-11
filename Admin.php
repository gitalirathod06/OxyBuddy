<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
  <link rel="stylesheet"  type="text/css" href="css/signup-login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">OxyBuddy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Homepage.php">Home</a>
        </li>
        

         <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
         </li>
        

         <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
         </li>
    
         <li class="nav-item">
          <a class="nav-link" href="Login.php">Login</a>
         </li>

         <li class="nav-item">
          <a class="nav-link" href="SignUp.php">Sign Up</a>
         </li>

         <li class="nav-item ">
          <a class="nav-link" href="Admin.php">Admin</a>
         </li>
       
      </ul>
      
     </div>
   </div>
 </nav>


<?php

 include 'admininfo.php';
 
 ?>

 <form  action= "" method="post">
     <div class="container">
       <h1 class="my-3"> Total No. of Oxygen Cylinder available at OxyBuddy</h1>
       
       <hr>



       <label><b>Total no.of oxygen cylinder</b></label>
       <input type="text" placeholder="Enter total no. of oxygen cylinder" name="Total" autocomplete="off"  class="form-control my-1"  required>

       
       <button type="submit" class="registerbtn my-3 bg-dark" name="submit" >Submit</button>
     </div>
  


</body>
</html>
