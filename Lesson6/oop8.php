<?php 
    //Lớp trìu tượng hóa
    abstract class Shape{
        //field
        public $color;

        //getter/setter
        public function setColor($color){
            $this->color = $color;
        }

        public function getColor(){
            return $this->color;
        }

        //abstract method
        public abstract  function perimeter();
        public abstract  function area();
        public abstract  function draw();

    }

    // $sh = new Shape();
    // $sh->setColor("Red");
    // echo $sh=getColor();

    class Circie extends Shape{
        const PI=3.14;
        private $radius;

        function __construct($radius){
            $this->radius=$radius;
        }
        public function perimeter(){
            return 2*$this->radius*self::PI;
        }
        public function area(){
            return self::PI*$this->radius*$this->radius;
        }
        public function draw(){
            echo "<h2> The Circie is drawing....";
        }
    }
    //Test
    $c = new Circie(10);

    echo "<h2> Perimeter:". $c->perimeter();
    echo "<h2> Area:". $c->area();
    $c->draw();
?>
