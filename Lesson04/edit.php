<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        //Kết nối tới db
        include("connectdb.php");
        //Submit form
        if(isset($_REQUEST['btnSave'])){
            $fullname = $_POST["fullName"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $active = $_POST["active"];
             //Tạo câu lệnh mới
             $sql = "UPDATE tvcuser SET fullName=:fullName,email=:email,phone=:phone,active=:active WHERE id=:id";
 
             //Chuẩn hóa câu lệnh
             $stmt = $pdo->prepare($sql);
 
             //Thực hiện truy vấn
             $stmt ->execute([
                 ':fullName' =>$fullname,
                 ':email' =>$email,
                 ':phone' =>$phone,
                 ':active' =>$active,
                 ':id' => $_GET['id']
             ]);
             header("location: select.php");
        }
        //Đọc dữ liệu từ db theo id
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            //Tạo truy vấn đọc dữ liệu
            $sql = "SELECT * FROM tvcuser WHERE id = $id";
            // thực thi
            $stmt = $pdo->query($sql);
            //đọc 1 bản ghi
            $row = $stmt->fetch(PDO :: FETCH_ASSOC);

            if(!$row) die('Không tồn tại');

        }
    ?>
<section class="container boder my-3 p-3">
        <h1>Sửa thông tin user có id: <?php echo $_GET["id"];?></h1>
        <form action="" method="post">
            <div>
                FullName: <input type="text" name="fullName" value="<?php echo $row['fullName'];?>" />
            </div>
            <div>
                Email: <input type="email" name="email" value="<?php echo $row['email'];?>"/>
            </div>
            <div>
                Phone: <input type="tel" name="phone" value="<?php echo $row['phone'];?>"/>
            </div>
            <div>
                Active
                    <input type="radio" name="active" id="actHoatdong" values="1" <?php if($row['active']==1) echo 'checked;'?> /> 
                        <label for="actHoatdong">Hoạt động</label>
                    <input type="radio" name="active" id="actKhoa" values="0" <?php if($row['active']==0) echo 'checked;'?>/> 
                        <label for="actKhoa">Khóa</label>
            </div>
            <button name="btnSave">Save</button>
            <a href="/select.php">Back</a>
        </form>
    </section>
</body>
</html>