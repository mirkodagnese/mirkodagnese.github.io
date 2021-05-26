<?php 

class Product {
	
	public string $title;
	public string $shortDescription;
	public string $description;
	public string $thumbnail;
	public array $images;
	
	public function __construct(string $title, string $shortDescription, string $description, string $thumbnail, array $images) {
        $this->$title = $title;
		$this->$shortDescription = $shortDescription;
		$this->$description = $description;
		$this->$thumbnail = $thumbnail;
		$this->$images = $images;
    }
	
}

?>