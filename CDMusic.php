<?php
    require_once "PRODUCT.php";
    class CDMusic extends PRODUCT
    {
        public $artist;
        public $genre;

    function __construct(){}
        
        public function setArtist($artist) 
        
        {
            $this->artist = $artist;
        }
        public function getArtist() 
        {
            return $this->artist;
        }
        public function setGenre($genre) 
        {
            $this->genre = $genre;
        }
        public function getGenre() 
        {
            return $this->genre;
        }
        public function getPriceWithTaxM() 
        {
            return parent::getPrice() + (0.1 * parent::getPrice());
        }
        public function getDiscountTaxM() 
        {
            return parent::getDiscount() + 5;
        }

    }
?>