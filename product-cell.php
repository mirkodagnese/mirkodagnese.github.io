<?php

include_once 'data.php';

if (isset($name)) {
    $product = $GLOBALS['data'][$name];

    $title = $product->getTitle();
    $shortDescription = $product->getShortDescription();
    $thumbnail = $product->getThumbnail();

    $url = "product.php?name={$name}";

    echo "
<a href='{$url}' style='text-decoration: none' target='_blank'>
  <div class='project-cell'>
    <div class='row project-cell-row'>
      <div class='col-md-5 project-cell-caption'>
        <div style='vertical-align: middle'>
          <h6 style='color: black'>{$title}</h6>
          <h5 style='color: black'>{$shortDescription}</h5>
          <hr align='left' size='2' width='20%' style='background-color: #13022C'>
          <p style='color: black'>VIEW PROJECT →</p>
        </div>
      </div>
      <div class='col-md-7 fill'> <img src='{$thumbnail}' alt='' style='object-position:0'> </div>
    </div>
  </div>
</a>
";
}

