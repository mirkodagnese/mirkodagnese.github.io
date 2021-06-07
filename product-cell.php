<?php

if (isset($product)) {
    $title = $product->getTitle();

    $urlTitle = urlencode($title);
    $shortDescription = $product->getShortDescription();
    $urlShortDescription = urlencode($shortDescription);
    $thumbnail = $product->getThumbnail();

    $description = $product->getDescription();
    $urlDescription = urlencode($description);
    $images = implode("|",$product->getImages());
    $urlImages = urlencode($images);

    $url = "product.php?title={$urlTitle}&shortDescription={$urlShortDescription}&description={$urlDescription}";

    if (!empty($product->getImages())) {
        $url .= "&images={$urlImages}";
    }

    echo "
<a href='{$url}' style='text-decoration: none' target='_blank'>
  <div class='project-cell'>
    <div class='row project-cell-row'>
      <div class='col-md project-cell-caption'>
        <div style='vertical-align: middle'>
          <h6 style='color: black'>{$title}</h6>
          <h5 style='color: black'>{$shortDescription}</h5>
          <hr align='left' size='2' width='20%' style='background-color: #13022C'>
          <p style='color: black'>VIEW PROJECT →</p>
        </div>
      </div>
      <div class='col-md fill'> <img src='{$thumbnail}' alt='' style='object-position:0'> </div>
    </div>
  </div>
</a>
";
}

