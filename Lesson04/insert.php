    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
        if(isset($_REQUEST["btnSave"])){
            include("connectdb.php");

            $fullname = $_POST["fullName"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $active = $_POST["active"];

            //Tạo câu lệnh mới
            $sql = "INSERT INTO tvcuser(fullName,email,phone,active)";
            $sql .="VALUES(:fullName, :email, :phone, :active)";

            //Chuẩn hóa câu lệnh
            $stmt = $pdo->prepare($sql);

            //Thực hiện truy vấn
            $stmt ->execute([
                ':fullName' =>$fullname,
                ':email' =>$email,
                ':phone' =>$phone,
                ':active' =>$active
            ]);
            header("location: select.php");
        }
    ?>
    <section class="container boder my-3 p-3">
        <h1>Thêm mới user</h1>
        <form action="" method="post">
            <div>
                FullName: <input type="text" name="fullName" />
            </div>
            <div>
                Email: <input type="email" name="email" />
            </div>
            <div>
                Phone: <input type="tel" name="phone" />
            </div>
            <div>
                Active
                    <input type="radio" name="active" id="actHoatdong" value="1" /> <label for="actHoatdong">Hoạt động</label>
                    <input type="radio" name="active" id="actKhoa" value="0" /> <label for="actKhoa">Khóa</label>
            </div>
            <button name="btnSave">Save</button>
        </form>
    </section>
</body>
</html>