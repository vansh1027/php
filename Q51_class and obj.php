<?php

    class Rectangle
    {
        // Declare  properties
        public $length = 10;
        public $width = 5;
        
        // Method to get the perimeter
        public function getPerimeter(){
            return (2 * ($this->length + $this->width));
        }
        
        // Method to get the area
        public function getArea(){
            return ($this->length * $this->width);
        }
    
        public function showResult(){
            echo "Length of Rectangle: " . $this->length . "\n";
            echo "Width of Rectangle: " . $this->width . "\n";
            echo "Perimeter of Rectangle: " . $this->getPerimeter() . "\n";
            echo "Area of Rectangle: " . $this->getArea() . "\n";
        }
    }
    
    $rec = new Rectangle;
    
    $rec->showResult();
echo "<br> This code is executed by vansh thakur,2220100302";

?>