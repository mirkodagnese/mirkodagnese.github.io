<?php

include 'product-object.php';
include 'global.php';

$products = array(
	new Product("BRAINSTON",
		"Logo & UI/UX App",
		"DESCRIPTION",
		"img/brainston.jpg",
		array("img/brainston/Brainston-01.png","img/brainston/Brainston-02.png","img/brainston/Brainston-03.png","img/brainston/Brainston-04.png","img/brainston/Brainston-05.png","img/brainston/Brainston-06.png","img/brainston/Brainston-07.png","img/brainston/Brainston-08.png","img/brainston/Brainston-09.png","img/brainston/Brainston-10.png","img/brainston/Brainston-11.png","img/brainston/Brainston-12.png")
	),
	new Product("KAUHA",
		"Chocolate Label",
		"DESCRIPTION",
		"img/kauha.jpg",
		array()
	),
	new Product("VARIOUS",
		"Post Design Social Media",
		"DESCRIPTION",
		"img/various-social.jpg",
		array()
	),
	new Product("ASIDE",
		"Magazine Design",
		"DESCRIPTION",
		"img/aside3.jpg",
		array()
	),
	new Product("HEIDRUNN",
		"Beer Label Design",
		"DESCRIPTION",
		"img/heidrunn.jpg",
		array()
	),
	new Product("RÉVOISON",
		"Logo Design & Branding",
		"DESCRIPTION",
		"img/rèvoison.jpg",
		array()
	),
);

foreach ( $products as $product ) {
	includeWithVariables('product-cell.php', array( 'product' => $product) );
}

?>
