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

<?php include("custom-footer.php"); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.4.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>