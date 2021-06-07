<?php

class Product {

    private $_title;
    private $_shortDescription;
    private $_description;
    private $_thumbnail;
    private $_images;

    public function __construct(string $title, string $shortDescription, string $description, string $thumbnail, array $images) {
        $this->_title = $title;
        $this->_shortDescription = $shortDescription;
        $this->_description = $description;
        $this->_thumbnail = $thumbnail;
        $this->_images = $images;
    }

    public function getTitle() { return $this->_title; }

    public function getShortDescription() { return $this->_shortDescription; }

    public function getThumbnail() { return $this->_thumbnail; }

    public function getDescription() { return $this->_description; }

    public function getImages() { return $this->_images; }
}

?>
