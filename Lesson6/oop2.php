<?php
    //construstor: hàm khởi tạo
    class Point{
        // field
        var $x;
        var $y;
        //set/get: attribute/properties
        function getX(){
           return $this->x;
        }
        function setX($pX){
            $this->x=$pX;
        }
        function getY(){
            return $this->y;
        }
        function setY($pY){
            $this->y=$pY;
        }

        // construstor 
        function __construct(){
        $this->x=100;
        $this->y=150;
        }
        // function __construst($pX, $pY){
        // $this->$pX;
        // $this->$pY;
        // }
    }
    //Tạo đối tượng
    $p= new Point();
    echo "<h2> Tạo độ điểm P: (".$p->x .",".$p->y. ")";

    $p->setX(200);
    $p->setY(300);
    echo "<h2> Tạo độ điểm P: (".$p->getX() .",".$p->getY(). ")";
?>
