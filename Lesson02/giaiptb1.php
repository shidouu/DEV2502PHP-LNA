<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải ptrinh bậc 1</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["btnThuchien"])){
            $a = $_POST["soA"];
            $b = $_POST["soB"];

            $kq="";
            if($a==0){
                if($b==0){
                    $kq ="Phương trình vô số nghiệm";
                }else{
                    $kq ="Phương trình vô nghiệm";
                }
            }else{
                $x = -$b/$a;
                $kq="Phương trình có nghiệm x= $x";
            }
        }
    ?>
    <form action="" method="post">
        <h1>Giải phương trình bậc 1: ax + b = 0</h1>
        <p>Hệ số a:
            <input type="number" name="soA" value="<?php echo isset($a)?$a:""; ?>">
        <p>Hệ số b:
            <input type="number" name="soB" value="<?php echo isset($a)?$a:""; ?>">
        <p>
            <button name="btnThuchien">Thực hiện</button>
        <p>
            <input type="submit" name="ketQua" value="Kết quả: <?php echo isset($kq)?$kq:''; ?>" style="width: 400px">
        </p>
    </form>
</body>
</html>