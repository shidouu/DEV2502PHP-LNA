<?php 
    include("ex1.php");
    class ElectricCar extends Car {
        // Tạo field
        public $batteryLife;
        // Hàm khởi tạo
        public function __construct($color, $model, $batteryLife) {
            parent::__construct($color, $model);
            $this->batteryLife = $batteryLife;
        }
        // Phương thức của lớp
        public function displayBattery() {
            echo "<p> Battery life: $this->batteryLife hours";
        }
    }
    $electricCar = new ElectricCar("Blue", "Tesla", 12);
    $electricCar->displayInfo();
    $electricCar->displayBattery();
?>