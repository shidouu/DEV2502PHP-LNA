<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register Form</title>
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
<div class="container">
    <form action="xulydangky.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6 offset-md-3">
            <h3>User Register</h3>
            <div class="form-group mb-3">
                <label for="user_name">User Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Tên đăng nhập" />
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu" />
            </div>

            <div class="form-group mb-3">
                <label for="avata">Avata</label>
                <input type="file" class="form-control" id="avata" name="avata" />
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Thư điện tử" />
            </div>

            <div class="form-group mb-3">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Điện thoại" />
            </div>

            <div class="form-group mb-3">
                <label for="birthday">Birthday</label>
                <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Ngày sinh" />
            </div>

            <div class="form-group mb-3">
                <label class="radio-inline me-3">
                    <input type="radio" id="male" name="gender" value="1" /> Male
                </label>
                <label class="radio-inline">
                    <input type="radio" id="female" name="gender" value="0" /> Female
                </label>
            </div>

            <div class="form-group mb-3">
                <?php 
                    include("connect.php");
                    // Truy vấn dữ liệu tỉnh/thành phố
                    $sqlSelectProvince = "SELECT * FROM tbl_province";
                    $stmt = $pdo->query($sqlSelectProvince);
                ?>
                <label for="province">Province</label>
                <select name="province" id="province" class="form-control" required>
                    <option value="">--Chose Province--</option>
                    <?php
                        while($rowPro = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo '<option value="' .$rowPro["province_id"].'">' .$rowPro["province_name"]. '</option>';
                        }
                    ?>                         
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="register">Register</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
    // add datepicker vào id birthday
    $("#birthday").datepicker({
        // format hiển thị ngày tháng năm
        dateFormat: "dd-mm-yy",
        // cho phép chọn ngày tháng
        changeMonth: true,
        changeYear: true
    });
    });
</script>
</body>
</html>
