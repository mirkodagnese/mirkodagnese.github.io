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

<!-- presentation code goes here -->

<div class="container-fluid">
  <div class="row">
    <div class="col-8">
      <h1>Hi, I’m Mirko.<br>
        Graphic & Web<br>
        Designer living<br>
        in Naples, Italy.</h1>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row" style="margin-top:30px">
    <div class="col-12">
      <p style="float: left">ABOUT ME</p>
      <div class="arrow-container"> <img class="arrow-image" src="img/arrowRight.svg" alt="arrow"> </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row" style="margin-top:30px">
    <div class="col-12">
      <div class="social-container"> <a class="behance-image" href=""></a></div>
      <div class="social-container"> <a class="dribble-image" href=""></a></div>
      <div class="social-container"> <a class="linkedin-image" href=""></a></div>
      <div class="social-container"> <a class="instagram-image" href=""></a></div>
    </div>
  </div>
</div>
<?php

include( 'product-object.php' );

$list = array([
  new Product( "BRAINSTON", "Logo & UI/UX App", "DESCRIPTION", "img/brainston.png", [] )
]);
	
#$title = "title";
#$shortDescription = "shortDescription";
#$thumbnail = "thumbnail";

foreach ( $list as $product ) {

  $title = $product->title;
  $shortDescription = $product->shortDescription;
  $thumbnail = $product->thumbnail;

# includeWithVariables('product-cell.php', array('title' => $title, 'shortDescription' => $shortDescription, 'thumbnail' => $thumbnail ));

}

function includeWithVariables( $filePath, $variables = array(), $print = true ) {
  $output = NULL;
  if ( file_exists( $filePath ) ) {
    // Extract the variables to a local namespace
    extract( $variables );

    // Start output buffering
    ob_start();

    // Include the template file
    include $filePath;

    // End buffering and return its contents
    $output = ob_get_clean();
  }
  if ( $print ) {
    print $output;
  }
  return $output;

}

?>

<!-- projects code goes here -->

<div class="project-cell" style="margin-top: 120px">
  <div class="row">
    <div class="col-5">
      <div style="vertical-align: middle">
        <h6 style="margin-top: 80px">BRAINSTON</h6>
        <h5>Logo & UI/UX App</h5>
        <hr align="left" size="2" width="20%" style="background-color: #13022C">
        <p>VIEW PROJECT →</p>
      </div>
    </div>
    <div class="col-7 fill" style="height: 300px"> <img src="img/brainston.png" alt="" style="object-position:0"> </div>
  </div>
</div>
<div class="project-cell" style="margin-top: 40px">
  <div class="row">
    <div class="col-5">
      <div style="vertical-align: middle">
        <h6 style="margin-top: 80px">KAHUA</h6>
        <h5>Chocolate Label</h5>
        <hr align="left" size="2" width="20%" style="background-color: #13022C">
        <p>VIEW PROJECT →</p>
      </div>
    </div>
    <div class="col-7 fill" style="height: 300px"> <img src="img/ChocolatePackaging Mockup - Kahua.png" alt="" style="object-position:0 20%"> </div>
  </div>
</div>
<div class="project-cell" style="margin-top: 40px">
  <div class="row">
    <div class="col-5">
      <div style="vertical-align: middle">
        <h6 style="margin-top: 80px">VARIOUS</h6>
        <h5>Post Design Social Media</h5>
        <hr align="left" size="2" width="20%" style="background-color: #13022C">
        <p>VIEW PROJECT →</p>
      </div>
    </div>
    <div class="col-7 fill" style="height: 300px"> <img src="img/various.png" alt="" style="object-position:0"> </div>
  </div>
</div>
<div class="project-cell" style="margin-top: 40px">
  <div class="row">
    <div class="col-5">
      <div style="vertical-align: middle">
        <h6 style="margin-top: 80px">ASIDE</h6>
        <h5>Magazine Design</h5>
        <hr align="left" size="2" width="20%" style="background-color: #13022C">
        <p>VIEW PROJECT →</p>
      </div>
    </div>
    <div class="col-7 fill" style="height: 300px"> <img src="img/placeholder.png" alt="" style="object-position:0 20%"> </div>
  </div>
</div>
<div class="project-cell" style="margin-top: 40px">
  <div class="row">
    <div class="col-5">
      <div style="vertical-align: middle">
        <h6 style="margin-top: 80px">HEIDRUNN</h6>
        <h5>Beer Label Design</h5>
        <hr align="left" size="2" width="20%" style="background-color: #13022C">
        <p>VIEW PROJECT →</p>
      </div>
    </div>
    <div class="col-7 fill" style="height: 300px"> <img src="img/heidrunn.png" alt="" style="object-position:0 90%"> </div>
  </div>
</div>
<div class="project-cell" style="margin-top: 40px">
  <div class="row">
    <div class="col-5">
      <div style="vertical-align: middle">
        <h6 style="margin-top: 80px">RÉVOISON</h6>
        <h5>Logo Design & Branding</h5>
        <hr align="left" size="2" width="20%" style="background-color: #13022C">
        <p>VIEW PROJECT →</p>
      </div>
    </div>
    <div class="col-7 fill" style="height: 300px"> <img src="img/rèvoison.jpg" alt="" style="object-position:0"> </div>
  </div>
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