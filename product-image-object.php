<?php

class ProductImage {

    private $_source;
    private $_twoSources;
    private $_layout;
    private $_description;

    public function __construct(string $source, int $layout, array $twoSources = null, string $description = null) {
        $this->_source = $source;
        $this->_twoSources = $twoSources;
        $this->_layout = $layout;
        $this->_description = $description;
    }

    public function getSource(): string { return $this->_source; }

    public function getTwoSources(): array { return $this->_twoSources; }

    public function getLayout(): int { return $this->_layout; }

    public function getDescription(): string { return $this->_description; }

}
