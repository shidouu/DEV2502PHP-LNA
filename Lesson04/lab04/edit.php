<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
    include("connect.php");
        if(isset($_REQUEST['btnsave'])){
            $user_name = $_POST["user_name"];
            $password = md5($_POST["password"]);
            $avata = "";
            if (isset($_FILES["avata"]) && $_FILES["avata"]["error"] == 0) {
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["avata"]["name"]);
                
                // Kiểm tra định dạng ảnh
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $allowed_types = ["jpg", "jpeg", "png", "gif"];
                if (in_array($imageFileType, $allowed_types)) {
                    move_uploaded_file($_FILES["avata"]["tmp_name"], $target_file);
                    $avata = $target_file; // Cập nhật nếu có file ảnh
                } else {
                    echo "Chỉ chấp nhận các file ảnh JPG, JPEG, PNG, GIF.";
                    exit;
                }
            }           
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $birthday = DateTime::createFromFormat('d-m-Y', $_POST["Birthday"]);
            $birthday = $birthday->format('Y-m-d');
            $gender = $_POST["gender"];
            $province = $_POST["province"];
            $description = addslashes($_POST["description"]);
            $date_create = date("Y-m-d H:i:s");
            if (empty($user_name) || empty($_POST["password"]) || empty($email) || empty($mobile)) {
                echo "Vui lòng nhập đầy đủ thông tin bắt buộc!";
                exit;
            };
             //Tạo câu lệnh mới
             $sql = "UPDATE tbl_user SET User_name=:User_name,password=:password,avata=:avata,email=:email,mobile=:mobile,
             Birthday=:Birthday,gender=:gender,province_id=:province,description=:description,date_create=:date_create,status=:status WHERE user_id=:user_id";
 
             //Chuẩn hóa câu lệnh
             $stmt = $pdo->prepare($sql);
 
             //Thực hiện truy vấn
             $stmt ->execute([
                ':User_name' =>$user_name,
                ':password' =>$password,
                ':email' =>$email,
                ':mobile' =>$mobile,
                ':Birthday' =>$birthday,
                ':province' =>$province,
                ':gender' =>$gender,
                ':avata' =>$avata,
                ':description' =>$description,
                ':date_create' =>$date_create,
                ':status' => 1,
                ':user_id' => $_GET['id']
             ]);
             header("location: select.php");
        }
        if(isset($_GET['id'])){

            $id = $_GET['id'];
            //Tạo truy vấn đọc dữ liệu
            $sql = "SELECT * FROM tbl_user WHERE user_id =" .$_GET["id"];
            
            // thực thi
            $stmt = $pdo->query($sql);

            //đọc 1 bản ghi
            $row = $stmt->fetch(PDO :: FETCH_ASSOC);

            if(!$row) die('Không tồn tại');
        }
?>
<form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-6 offset-md-3">
            <h3>User Register</h3>
            <div class="form-group mb-3">
                <label for="user_name">User Name</label>
                <input type="hidden" name="user_id" id="user_id" value="<?php echo $row['user_id']; ?>">
                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Tên đăng nhập" value="<?php echo $row['User_name']; ?>" />
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
                <input type="email" class="form-control" id="email" name="email" placeholder="Thư điện tử"  value="<?php echo $row['email']; ?>" />
            </div>

            <div class="form-group mb-3">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Điện thoại" value="<?php echo $row['mobile']; ?>" />
            </div>

            <div class="form-group mb-3">
                <label for="birthday">Birthday</label>
                <input type="text" class="form-control" id="birthday" name="Birthday" placeholder="Ngày sinh" value="<?php echo date("d-m-Y",strtotime($row['Birthday'])); ?>" />
            </div>

            <div class="form-group mb-3">
                <?php
                    if($row['gender']){
                ?>
                <label class="radio-inline me-3">
                    <input type="radio" id="male" name="gender" value="1" checked/> Male
                </label>
                <label class="radio-inline">
                    <input type="radio" id="female" name="gender" value="0"/> Female
                </label>
                <?php }else{
                    ?>
                    <label class="radio-inline me-3">
                        <input type="radio" id="male" name="gender" value="1"/> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" id="female" name="gender" value="0" checked/> Female
                    </label>
                    <?php
                    }
                ?>
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
                            $checked = "";
                            if((int)$row['province']==$rowPro["province_id"]){
                                $checked = "selected";
                            }
                            echo '<option '.$checked.' value="' .$rowPro["province_id"].'">' .$rowPro["province_name"]. '</option>';
                        }
                    ?>                         
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10" <?php echo $row['description']; ?> ></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="btnsave">Update</button>
        </div>
    </form>
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