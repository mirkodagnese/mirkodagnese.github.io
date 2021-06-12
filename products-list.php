<?php

include 'global.php';
include_once 'data.php';

$products = $GLOBALS['data'];

foreach ( $products as $key => $value ) {
	includeWithVariables('product-cell.php', array( 'name' => $key) );
}
