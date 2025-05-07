<!-- // Định nghĩa lớp đối tượng -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>
 </head>
 <body>
    <h1>Lớp đối tượng</h1>
    <?php 
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
        }

        // Tạo đối tượng
        $p = new Point();
        //Truy cập đến thuộc tính của đối tượng
        $p->setX(200);
        $p->setY(100);

        echo "<h2> Tạo độ điểm P: (".$p->getX() .",".$p->getY().")";

        $p->x=250;
        $p->y=300;
        echo "<h2> Tạo độ điểm P: (".$p->getX() .",".$p->getY(). ")";
        echo "<h2> Tạo độ điểm P: (".$p->x .",".$p->y. ")";

    ?>
 </body>
 </html>