<!--
include('product-object.php');

$title = $_GET["title"];
$shortDescription = $_GET["shortDescription"];
$thumbnail = $_GET["thumbnail"];

echo '

<div class="project-cell" style="margin-top: 120px">
  <div class="row">
    <div class="col-5">
      <div style="vertical-align: middle">
        <h6 style="margin-top: 80px">' + $title + '</h6>
        <h5>' + $shortDescription + '</h5>
        <hr align="left" size="2" width="20%" style="background-color: #13022C">
        <p>VIEW PROJECT →</p>
      </div>
    </div>
    <div class="col-7 fill" style="height: 300px"> <img src="' + $thumbnail + '" alt="" style="object-position:0"> </div>
  </div>
</div>
-->

<div class="project-cell" style="margin-top: 120px">
  <div class="row">
    <div class="col-5">
      <div style="vertical-align: middle">
        <h6 style="margin-top: 80px"> <?php echo $title ?> </h6>
        <h5> <?php echo $shortDescription ?>  </h5>
        <hr align="left" size="2" width="20%" style="background-color: #13022C">
        <p>VIEW PROJECT →</p>
      </div>
    </div>
    <div class="col-7 fill" style="height: 300px"> <img src="<?php echo $thumbnail ?>" alt="" style="object-position:0"> </div>
  </div>
</div>