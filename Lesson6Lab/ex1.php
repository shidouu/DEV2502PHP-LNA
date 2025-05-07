<?php
    // 1. Khai Báo Lớp và Đối TượngKhai Báo Lớp và Đối Tượng
    class Car {
        // khai báo các field
        public $color;
        public $model;
        // Hàm khởi tạo
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        // Định nghĩa phương thức
        public function displayInfo() {
            echo "<h1> Color: $this->color <br/> Model: $this->model";
        }
    }
    $car1 = new Car("Red", "Toyota");
    $car1->displayInfo();
?>