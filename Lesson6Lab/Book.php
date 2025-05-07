<?php 
    class Book {
        // Các thông tin sách
        private $title;
        private $author;
        private $quantity;
        
        public function __construct($title, $author, $quantity) {
            $this->title = $title;
            $this->author = $author;
            $this->quantity = $quantity;
        }
        public function getTitle() {
            return $this->title;
        }
        public function getAuthor() {
            return $this->author;
        }
        public function getQuantity() {
            return $this->quantity;
        }
        public function updateQuantity($quantity) {
            $this->quantity = $quantity;
        }
    }
?>