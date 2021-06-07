<?php

include 'product-object.php';
include 'global.php';

$products = array(
    new Product("BRAINSTON", "Logo & UI/UX App", "DESCRIPTION", "img/brainston.png", array("img/placeholder.png","img/placeholder.png","img/placeholder.png") ),
    new Product("KAHUA", "Chocolate Label", "DESCRIPTION", "img/kahua.png", array() ),
    new Product("VARIOUS", "Post Design Social Media", "DESCRIPTION", "img/various.png", array() ),
    new Product("ASIDE", "Magazine Design", "DESCRIPTION", "img/placeholder.png", array() ),
    new Product("HEIDRUNN", "Beer Label Design", "DESCRIPTION", "img/heidrunn.png", array() ),
    new Product("RÉVOISON", "Logo Design & Branding", "DESCRIPTION", "img/rèvoison.jpg", array() ),
);

foreach ( $products as $product ) {
    includeWithVariables('product-cell.php', array( 'product' => $product) );
}

?>
