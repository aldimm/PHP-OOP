<?php
    require_once "PRODUCT.php";
    class CDRack extends PRODUCT
    {
        public $capacity;
        public $model;
        
        function __construct() {}
        
        public function setRackName($rackname) 
        {
            $this->rackname = $rackname;
        }
        public function getRackName() 
        {
            return $this->rackname;
        }
        public function setCapacity($capacity) 
        {
            $this->capacity = $capacity;
        }
        public function getCapacity() 
        {
            return $this->capacity;
        }
        public function setModel($model) 
        {
            $this->model = $model;
        }
        public function getModel() 
        {
            return $this->model;
        }
        public function getPriceWithTaxR() 
        {
            return parent::getPrice() + (0.15 * parent::getPrice());
        }
        public function getDiscountTaxR() 
        {
            return parent::getDiscount();
        }
    }
?>