<?php 
    class ProductsModel{
        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        public function getAllProducts(){
            $stmt = $this->db->query("SELECT * FROM product");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function insert($id,$Name, $Quantity,$Price,$Image,$status,$category_id){
            $sql = "INSERT INTO product(id,Name,Quantity,Price,Image,status,category_id) VALUES (:id,:Name,:Quantity,:Price,:Image,:status,:category_id)";
            $stmt = $this->db->prepare($sql);

            $stmt = bindParam(':id', $id);
            $stmt = bindParam(':Name', $Name);
            $stmt = bindParam(':Quantity', $Quantity);
            $stmt = bindParam(':Price', $Price);
            $stmt = bindParam(':Image', $Image);
            $stmt = bindParam(':status', $status);
            $stmt = bindParam(':category_id', $category_id);

            return $stmt->excute();
        }
        public function delete($id,$Name, $Quantity,$Price,$Image,$status,$category_id){
            $sql = "DELETE INTO product WHERE id= :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }
    }