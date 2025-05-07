<?php 
    class StudentsModel{
        private $db; //biến đối tượng kết nối cơ sở dữ liệu
        public function __construct($db)
        {
            $this->db = $db;
        }
    
        //CRUD
        //read all 
        public function getAllStudents(){
            $stmt = $this->db->query("SELECT * FROM students");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        //Insert
        public function insert($khoa, $monhoc, $sinhvien, $ketqua){
            $sql = "INSERT INTO students(khoa, monhoc, sinhvien, ketqua) VALUES (:khoa, :monhoc, :sinhvien,:ketqua)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':khoa',$khoa);
            $stmt->bindParam(':monhoc',$monhoc);
            $stmt->bindParam(':sinhvien',$sinhvien);
            $stmt->bindParam(':ketqua',$ketqua);

            return $stmt->execute();
        }
        //update

        //delete
        
    }