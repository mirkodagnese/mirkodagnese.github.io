<?php

include_once 'data.php';

if (isset($name)) {
    $product = $GLOBALS['data'][$name];

    $title = $product->getTitle();
    $shortDescription = $product->getShortDescription();
    $thumbnail = $product->getThumbnail();
    $hoverColor = $product->getHoverColor();

    $url = "product.php?name={$name}";

    echo "
<style>
#$name-caption-container.hovered {
    transition: background-color 300ms;
}

.project-cell:hover #$name-caption-container.hovered {
    background-color: $hoverColor;
}

#$name-caption {
    margin-left: 0;
    transition: margin 300ms;
}

.project-cell:hover #$name-caption.hovered {
	margin-left: 20%;
}
</style>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<script>
$(function() {
    $('#$name-caption').addClass('hovered');
    $('#$name-caption-container').addClass('hovered');
});
</script>

<a href='{$url}' style='text-decoration: none' target='_blank'>
  <div class='project-cell'>
    <div class='row project-cell-row'>
      <div id='$name-caption-container' class='col-md-5 project-cell-caption-container'>
        <div id='$name-caption' class='project-cell-caption'>
          <h6 class='project-cell-name'>{$title}</h6>
          <h5 class='project-cell-short-description'>{$shortDescription}</h5>
          <hr class='project-cell-hr'>
          <p class='project-cell-view-project'>VIEW PROJECT →</p>
        </div>
      </div>
      <div class='col-md-7 fill project-cell-image-container'> 
        <img src='{$thumbnail}' alt=''> 
      </div>
    </div>
  </div>
</a>
";
}

