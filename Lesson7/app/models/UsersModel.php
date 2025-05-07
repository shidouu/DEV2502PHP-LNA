<?php 
    class UsersModel{
        private $db; //biến đối tượng kết nối cơ sở dữ liệu
        public function __construct($db)
        {
            $this->db = $db;
        }
    
        //CRUD
        //read all user
        public function getAllusers(){
            $stmt = $this->db->query("SELECT * FROM users");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        //Insert
        public function insert($fullname, $username,$password){
            $sql = "INSERT INTO users(fullname, username, password) VALUES (:fullname, :username, :password)";
            $stmt = $this->db->prepare($sql);

            $pass = password_hash($password, PASSWORD_BCRYPT);

            $stmt->bindParam(':fullname',$fullname);
            $stmt->bindParam(':usersname',$usersname);
            $stmt->bindParam(':password',$password);

            return $stmt->execute();
        }
        //update

        //delete
        
    }