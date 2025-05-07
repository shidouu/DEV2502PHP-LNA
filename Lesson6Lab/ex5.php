<?php
    // Định nghĩa Interface
    interface Animal {
        public function sound();
        public function move();
    }

    class Dog implements Animal {
        public function sound() {
            echo "Woof! Woof!";
        }

        public function move() {
            echo "The dog runs.";
        }
    }

    class Cat implements Animal {
        public function sound() {
            echo "Meow! Meow!";
        }

        public function move() {
            echo "The cat walks.";
        }
    }

    $dog = new Dog();
    $dog->sound();
    $dog->move();

    $cat = new Cat();
    $cat->sound();
    $cat->move();
?>