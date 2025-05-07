<?php 
    class Person {
        // Field
        private $name;

        // setter
        public function setName($name) {
            $this->name = $name;
        }
        // getter
        public function getName() {
            return $this->name;
        }
    }
    $person = new Person();
    $person->setName("Devmaster Academy");
    echo "<h1> ". $person->getName();
?>