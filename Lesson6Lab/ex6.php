<?php 
namespace ex6{
    abstract class Shape {
        protected $name;

        abstract public function area();

        public function getName() {
            return $this->name;
        }
    }

    class Circle extends Shape {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
            $this->name = "Circle";
        }

        public function area() {
            return pi() * pow($this->radius, 2);
        }
    }

    class Rectangle extends Shape {
        private $width;
        private $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
            $this->name = "Rectangle";
        }

        public function area() {
            return $this->width * $this->height;
        }
    }
    $circle = new Circle(5);
    echo "<h2>". $circle->getName() . " Area: " . $circle->area();

    $rectangle = new Rectangle(4, 6);
    echo "<h2>". $rectangle->getName() . " Area: " . $rectangle->area();
}
?>