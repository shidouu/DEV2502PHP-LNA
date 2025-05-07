<?php
    class Employee{
        private $name;
        private $birthdate;
        private $address;
        private $phone;
        private $department;
        private $position;
        private $baseSalary;
        private $bonus;
        private $allowance;
        private $tax;

        public function __construct($name, $birthdate, $address, $phone, $department, $position, $baseSalary,$bonus,$allowance,$tax){
            $this->name = $name;
            $this->birthdate = $birthdate;
            $this->address = $address;
            $this->phone = $phone;
            $this->department = $department;
            $this->position = $position;
            $this->baseSalary = $baseSalary;
            $this->bonus = $bonus;
            $this->allowance = $allowance;
            $this->tax = $tax;
        }
        public function getName(){
            return $this->name;
        }
        public function getBirthdate(){
            return $this->birthdate;
        }
        public function getAddress(){
            return $this->address;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function getDepartment(){
            return $this->department;
        }
        public function getPosition(){
            return $this->position;
        }
        public function calculateSalary() {
            return $this->baseSalary + $this->bonus + $this->allowance - $this->tax;
        }
        public function showInfo() {
            echo "Tên: " . $this->name . "<br>";
            echo "Ngày sinh: " . $this->birthdate . "<br>";
            echo "Địa chỉ: " . $this->address . "<br>";
            echo "SĐT: " . $this->phone . "<br>";
            echo "Phòng ban: " . $this->department . "<br>";
            echo "Chức vụ: " . $this->position . "<br>";
            echo "Lương thực nhận: " . $this->calculateSalary() . " VND<br><br>";
        }        
    }
?>