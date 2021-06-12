<?php

class Product {

    private $_title;
    private $_shortDescription;
    private $_description;
    private $_thumbnail;
    private $_hoverColor;
    private $_images;

    public function __construct(string $title, string $shortDescription, string $description, string $thumbnail, string $hoverColor, array $images) {
        $this->_title = $title;
        $this->_shortDescription = $shortDescription;
        $this->_description = $description;
        $this->_thumbnail = $thumbnail;
        $this->_hoverColor = $hoverColor;
        $this->_images = $images;
    }

    public function getTitle(): string { return $this->_title; }

    public function getShortDescription(): string { return $this->_shortDescription; }

    public function getThumbnail(): string { return $this->_thumbnail; }

    public function getDescription(): string { return $this->_description; }

    public function getHoverColor(): string { return $this->_hoverColor; }

    public function getImages(): array { return $this->_images; }
}
