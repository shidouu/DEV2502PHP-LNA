<?php 
    class CategoryModel{
        private $db; //biến đối tượng kết nối cơ sở dữ liệu
        public function __construct($db)
        {
            $this->db = $db;
        }
    
        //CRUD
        //read all user
        public function getAllCategory(){
            $stmt = $this->db->query("SELECT * FROM category");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }