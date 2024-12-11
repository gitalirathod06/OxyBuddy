<!DOCTYPE html>
<html>
<head>
	<title> Homepage</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet"  type="text/css" href="css/homepg.css">
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


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/oxygen1.jpg" alt="ox1" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Welcome to OxyBuddy!!!!!</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/oxygen2.jpg" alt="ox2" width="1100" height="500">
      <div class="carousel-caption">
        
        <p> We are providing oxygen cylinder to hospitals...</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/oxygen3.jpg" alt="ox3" width="1100" height="500">
      <div class="carousel-caption">
        
        <p> Let's fight together </p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div>
	     
		   <h2 class="bg-dark  text-white  text-center"> About Us </h2>
         
         <div class="my-5">
		   <h1 class="text-center"> OxyBuddy!</h1>
		 </div> 
		  
		 <div class="my-3">
		 	<h4>
		 	<p class="text-center"> Helloo Guys!Welcome to OxyBuddy. </p>
		 	</h4>
		 	<p class="text-center"> In tis pandemic due to COVID-19 there is increasing oxygen demand.So,this website is help hospitals to register their requirement of oxygen so there is a no need to go to oxygen plant to fill up oxygen cylinders and no need to wait in long queue for hours and hours.We deliver oxygen cylinder to give address of hospitals.If you want any help please contact us.Let's be together in this pandemic and fight against COVID-19. </p>
         </div>
         
         
    </div>
  
</section>

<footer>
	<p class="p-1 bg-dark text-white text-center" > @OxyBuddy </p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>