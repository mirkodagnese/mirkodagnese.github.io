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

<nav id="myLogo" class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid"><a class="navbar-brand" href="#"><img class="navbar-logo" src="img/logo.svg" alt="Mirko D'Agnese"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
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

<!-- form code goes here -->

<h2 style="margin-bottom: 10px; display: flex; justify-content: center;">Contact Me</h2>
<div class="form-contact">
  <form action="" style="display: flex; align-items: center; flex-direction: column;">
    <div>
      <div class="top-text">YOUR NAME*</div>
      <div>
        <input class="my-form form-dimension-small" type="text" placeholder="First name..." required minlenght="3" maxlength="12">
        <input class="my-form form-dimension-small" type="text" placeholder="Surname..." required minlenght="3" maxlength="12">
      </div>
    </div>
    <div>
      <div class="top-text space-top">EMAIL ADDRESS*</div>
      <div>
        <input class="my-form form-dimension-large" type="email" placeholder="Eg. example@email.com" required>
      </div>
    </div>
    <div>
      <div class="top-text space-top">PHONE NUMBER*</div>
      <div>
        <input class="my-form form-dimension-large" type="email" placeholder="Eg. +33 3333333333" required>
      </div>
    </div>
    <div>
      <div class="top-text space-top">MESSAGE*</div>
      <textarea class="my-form form-dimension-large" name="" id="" cols="30" rows="10" placeholder="Please enter your comments…" required minlenght="10"></textarea>
    </div>
    <div style="display: flex; align-items: center">
      <button class="space-top click-submit" type="submit">Submit <img src="img/arrowRightWhite.svg" alt="Save icon" style="width: 32px; margin-left: 15px; "/> </button>
      <!--<input type="submit" class="space-top click-submit" value="Submit">
	  <img class="arrow-image" src="img/arrowRight.svg" alt="arrow">--> 
    </div>
  </form>
</div>

<!-- footer code goes here -->

<footer>
  <div class="text-footer">
    <p>• All works © Mirko D’Agnese. / Please do not reproduce without the expressed written consent • mirkoddesigner@gmail.com •</p>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.4.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>