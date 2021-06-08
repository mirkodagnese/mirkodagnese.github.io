<?php

include 'product-object.php';
include 'global.php';

$products = array(
	new Product("BRAINSTON",
		"Logo & UI/UX App",
		"DESCRIPTION",
		"img/brainston.jpg",
		array("img/brainston/Brainston-01.jpg","img/brainston/Brainston-02.jpg","img/brainston/Brainston-03.jpg","img/brainston/Brainston-04.jpg","img/brainston/Brainston-05.jpg","img/brainston/Brainston-06.jpg","img/brainston/Brainston-07.jpg","img/brainston/Brainston-08.jpg","img/brainston/Brainston-09.jpg","img/brainston/Brainston-10.jpg","img/brainston/Brainston-11.jpg","img/brainston/Brainston-12.jpg")
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
		array("img/various-social.jpg","img/various-social/social-02.jpg","img/various-social/social-03.jpg","img/various-social/social-04.jpg","img/various-social/social-05.jpg","img/various-social/social-06.jpg")
	),
	new Product("ASIDE",
		"Magazine Design",
		"DESCRIPTION",
		"img/aside.jpg",
		array("img/aside/aside-01.jpg","img/aside/aside-02.jpg","img/aside/aside-03.jpg","img/aside/aside-04.jpg","img/aside/aside-05.jpg")
	),
	new Product("HEIDRUNN",
		"Beer Label Design",
		"DESCRIPTION",
		"img/heidrunn.jpg",
		array("img/heidrunn/heidrunn-01.jpg","img/heidrunn/heidrunn-02.jpg","img/heidrunn/heidrunn-03.jpg","img/heidrunn/heidrunn-04.jpg","img/heidrunn/heidrunn-05.jpg","img/heidrunn/heidrunn-06.jpg","img/heidrunn/heidrunn-07.jpg","img/heidrunn/heidrunn-08.jpg","img/heidrunn/heidrunn-09.jpg","img/heidrunn/heidrunn-10.jpg","img/heidrunn/heidrunn-11.jpg","img/heidrunn/heidrunn-12.jpg","img/heidrunn/heidrunn-13.jpg","img/heidrunn/heidrunn-14.jpg","img/heidrunn/heidrunn-15.jpg")
	),
	new Product("RÉVOISON",
		"Logo Design & Branding",
		"DESCRIPTION",
		"img/rèvoison.jpg",
		array("img/revoison/revoison-01.jpg","img/revoison/revoison-naming.jpg","img/revoison/revoison-02.jpg","img/revoison/revoison-03.jpg","img/revoison/revoison-04.jpg","img/revoison/revoison-05.jpg","img/revoison/revoison-06.jpg","img/revoison/revoison-07.jpg","img/revoison/revoison-08.jpg","img/revoison/revoison-09.jpg","img/revoison/revoison-10.jpg","img/revoison/revoison-11.jpg")
	),
);

foreach ( $products as $product ) {
	includeWithVariables('product-cell.php', array( 'product' => $product) );
}

?>
