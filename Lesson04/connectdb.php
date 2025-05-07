<?php 
    //Tài nguyên kết nối
    $host ="localhost";
    $dbname = "dev2502lm_lesson04db";
    $username = "root";
    $password = "";

    $dbn = "mysql:host =$host;dbname=$dbname";

    try{
        $pdo = new PDO($dbn,$username,$password);
        $pdo->setAttribute(PDO :: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

        // echo "Connect sucessfully";
    }catch(PDOException $ex){
        echo "Connect Fail: " . $ex->getMessage();
        die('Kết nối không thành công');
    }
?>