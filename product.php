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
    <link href="css/mobile-myStyle.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
<!-- body code goes here -->

<!-- navbar code goes here -->

<?php include("custom-header.php"); ?>

<!-- description product code goes here -->

<?php

include_once "data.php";

$name = $_GET["name"];

$product = $GLOBALS["data"][$name];

$title = $product->getTitle();
$shortDescription = $product->getShortDescription();
$description = $product->getDescription();
$thumbnail = $product->getThumbnail();
$images = $product->getImages();

echo "
<div class='col-md-8' style='margin-left: auto; margin-right: auto;'>
    <div class='description-product'>
        <h4>{$title}</h4>
        <h2>{$shortDescription}</h2>
        <hr style='color: #13022C; width: 20%; margin-left: 0; border: 2px solid;'>
        <p style='color: rgb(51, 51, 51)'>{$description}</p>
    </div>

    <div class='col-md fill images-list-product-detail'>";

if (!empty($images) && $images != null) {
    foreach ($images as $img) {
        switch ($img->getLayout()) {
            case ProductImageLayout::FULLSCREEN:
                echo "<img id='product-image' class='image-product-detail' style='aspect-ratio: 1400/800;' src='{$img->getSource()}' alt=''>";
                break;
            case ProductImageLayout::TWO_COLUMNS:
                $sources = $img->getTwoSources();
                if (count($sources) < 3 && count($sources) > 0) {
                    echo "<div class='row image-product-container'>";
                    foreach ($sources as $source) {
                        echo "<div class='col-md-6'>
                                <img id='product-image' class='image-product-detail' src='{$source}' alt=''>
                              </div>";
                    }
                    echo "</div>";
                }
                break;
            case ProductImageLayout::RIGHT_DESCRIPTION:
                echo "<div class='row image-product-container'>
                        <div class='col-md'>
                            <img id='product-image' class='image-product-detail' style='aspect-ratio: 700/800' src='{$img->getSource()}' alt=''>
                        </div>
                        <div class='col-md image-product-description-container'>
                            <p class='image-product-description' style='margin-bottom: 0'> {$img->getDescription()} </p>
                        </div>
                     </div>";
                break;
            case ProductImageLayout::BOTTOM_DESCRIPTION:
                echo "<div class='col-md image-product-container'>
                        <img id='product-image' class='image-product-detail' src='{$img->getSource()}' alt=''>
                        <p class='image-product-description'> {$img->getDescription()} </p>
                     </div>";
                break;
            case ProductImageLayout::DESCRIPTION_ONLY:
                echo "<div class='row image-product-container'>
                        <div class='col-md-6'></div>
                        <div class='col-md-6 image-product-description-container'>
                            <p class='image-product-description' style='margin-bottom: 0'> {$img->getDescription()} </p>
                        </div>
                     </div>";
                break;
            default:
                echo "#### NO CASE PRESENT WITH INTEGER {$img->getLayout()} ####";
                break;
        }
    }
}

echo "
    </div>
</div>

";

?>

<!-- ancorpoint code goes here -->

<?php include("anchor-point.php"); ?>

<!-- footer code goes here -->

<?php include("custom-footer.php"); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.4.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
