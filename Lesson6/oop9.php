<?php
    //Sử dụng các margic method
    class Customer{
        private $name;
        private $data = array();

        //Hàm __get sẽ gọi khi truy cập một thuộc tính không tồn tại
        function __get($name){
            if(array_key_exists($name,$this->data)){
                return $this->data[$name];
            }else{
                return "<p><i> Không có thuộc tính $name </i> </br>";
            }
        }
        //Gán giá trị 
        function __set($name,$values){
            $this->data[$name]=$values;
        }

        function __call($fn_name, $args){
            print "Underfined method $fn_name called with vars: \n";
            print_r($args);
        }
        function display($mess){
            print_r($mess);
        }
    }
    //Sử dụng
    $cus = new Customer();
    $cus->email= "leanh123@gmail.com";  //gọi __set
    echo "<h2> ". $cus->email;          //gọi __get

    echo "<h2> ". $cus->phone;

    $res = $cus->test(1,2,3);
    $res = $cus->display("Devmaster");
?>