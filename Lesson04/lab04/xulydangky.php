    <?php
    // Import file kết nối CSDL
    include("connect.php");
    if (!$pdo) {
        die("Lỗi kết nối CSDL!");
    }

    if (isset($_POST["register"])) {
        // Lấy dữ liệu từ form
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
        $birthday = DateTime::createFromFormat('d-m-Y', $_POST["birthday"]);
        if (!$birthday) {
            echo "Lỗi: Ngày sinh không đúng định dạng!";
            exit;
        }
        $birthday = $birthday->format('Y-m-d');
        $gender = $_POST["gender"];
        $province = $_POST["province"];
        $description = addslashes($_POST["description"]);
        $date_create = date("Y-m-d H:i:s");
        if (empty($user_name) || empty($_POST["password"]) || empty($email) || empty($mobile)) {
            echo "Vui lòng nhập đầy đủ thông tin bắt buộc!";
            exit;
        }
        
        try {
            // Chuẩn bị câu truy vấn INSERT với PDO (sử dụng prepared statement chống SQL Injection)
            $sql = "INSERT INTO tbl_user (User_name, password, email, mobile, Birthday, province_id, gender, avata, description, date_create, status)
                    VALUES(:User_name, :password, :email, :mobile, :Birthday, :province, :gender, :avata, :description, :date_create, :status)";

            $stmt = $pdo->prepare($sql);

            // Thực thi truy vấn với dữ liệu từ form
            $stmt->execute([
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
                ':status' => 1
            ]);          
            echo "Đăng ký thành công!";
            header("location: demo.php");
        } catch (PDOException $ex) {
            echo "Lỗi khi thêm dữ liệu: " . $ex->getMessage();
        }
    }
    ?>  
