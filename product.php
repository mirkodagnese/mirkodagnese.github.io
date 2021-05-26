<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mirko D'Agnese</title>
<!-- Bootstrap -->
<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
<link href="css/myStyle.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
<!-- body code goes here --> 
	
<!-- navbar code goes here -->

<?php include("custom-header.php"); ?>
	
 <nav id="myLogo" class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid"><a class="navbar-brand" href="#"><img class="navbar-logo" src="img/logo.svg" alt="Mirko D'Agnese"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link" aria-current="page" href="index.php" style="float: right">
          <mark>Projects</mark>
          </a></li>
        <li class="nav-item"> <a class="nav-link" href="about.php" style="float: right">
          <mark>About</mark>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="contact.php" style="padding-right: 0px!important; float: right">
          <mark>Contact</mark>
          </a> </li>
     </ul>
    </div>
	  </div>
</nav>

<!-- description product code goes here -->

<div class="description-product" style="display: grid; margin-right: 250px; margin-left: 250px; margin-bottom: 100px">
	<h1>Logo & UI/UX App</h1>
	<hr align="left" size="2" width="20%" style="background-color: #13022C">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe necessitatibus quo, aliquam facilis. Sit beatae odit reiciendis doloremque impedit animi, minima quod ad, eius. Ullam impedit voluptatum atque necessitatibus tenetur?</p>
</div>

<div class="col-12 fill" style="padding-left: 250px; padding-right: 250px; justify-content: center; display: flex;">
	<img src="img/placeholder.png" alt="" style="object-position:0 20%; aspect-ratio: 1400/800;"> 
</div>
	
<!-- ancorpoint code goes here -->

<div class="project-cell"> <a href="#myLogo" style="text-decoration: none">
  <div style="margin-top:80px; margin-bottom: 80px; display: flex; justify-content: center; align-items: center">
    
      <p style="color: black">Back to top</p>
      <div class="arrow-container"> <img class="arrow-image" src="img/arrowRight.svg" alt="arrow" style="transform: rotate(270deg)"> </div>
    
  </div>
  </a> </div>
	
<!-- footer code goes here -->

<footer>
<div class="text-footer">
	<p>• All works © Mirko D’Agnese. / Please do not reproduce without the expressed written consent • mirkoddesigner@gmail.com •</p></div>

</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.4.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>