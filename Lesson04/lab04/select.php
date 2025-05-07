<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="tinymce/tinymce.min.js"></script>
    <script src="js/editor.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
</head>
<body>
<?php 
        //1.Knoi db
        include("connect.php");

        //2.Tạo truy vấn đọc dữ liệu
        $sql= "SELECT * FROM tbl_user WHERE 1=1";
        $sql = "SELECT u.*, p.province_name 
        FROM tbl_user u
        JOIN tbl_province p ON u.province_id = p.province_id";

        //3.Thực thi câu lệnh truy vấn
        $resultSet = $pdo->query($sql);

        //4.Đọc dữ liệu trong tập kết quả $resultSet
        // while($row = $resultSet->fetch(PDO:: FETCH_ASSOC)){
        //     echo "<li>" . $row['fullName'];
        // }
    ?>
    <div class="container my-3 p-3">
    <h1>Đọc dữ liệu từ bảng</h1>
    <hr>
    <table class="table table-bodered">
        <thead>
            <tr>
                <th>#</th>
                <th>User name</th>
                <th>Email</th>
                <th>Avata</th>
                <th>Mobile</th>
                <th>Birthday</th>
                <th>Province</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt=0;
                while($row = $resultSet->fetch(PDO:: FETCH_ASSOC)):
                $stt++;
            ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $row['User_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['avata']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo date("Y-m-d",strtotime($row['Birthday'])); ?></td>
                <td><?php echo $row['province_name']; ?></td>
                <td><?php echo ($row["gender"])?"Male":"Female"; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['user_id'];?>"> <span class="glyphicon glyphicon-pencil"></span>Edit</a>
                    <a href="delete.php?id=<?php echo $row['user_id'];?>"> <span class="glyphicon glyphicon-trash"></span>Delete</a>
                </td>
            </tr>
            <?php
                endwhile; 
            ?>
        </tbody>
    </table>
    <a href="demo.php">Thêm mới</a>
    </div>
</body>
</html>