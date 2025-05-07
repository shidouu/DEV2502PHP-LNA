<?php 
//Lớp base class
    class car{
        var $mileage;
        var $color;
        protected $make;

        //method
        public function accelerate(){
            echo "<h2> Car is  Accelerate";
        }
    }
    //Lớp kế thừa   
    class Luxury extends Car{
        public $perks;

        //method override
        public function accelerate(){
            echo "<h2> Car is  Accelerate";
        }

        public function display(){
            echo "<h2> $this->mileage; $this->color; $this->make; $this->perks";
        }
    }

    //Test
    $lux = new Luxury();
    $lux-> mileage = "mileage";
    $lux->color ="Red";
    $lux->perks = "perks";

    $lux -> display();
?>