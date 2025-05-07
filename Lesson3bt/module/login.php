<?php 
    if(isset($_SESSION["userInfo"])){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="col-md-6 col-md-offset-3 mb30">
        <h3>Login System</h3>
        <form action="" method="post">
            <div class="form-group">
                <label for="user_name">Username</label>
                <input type="text" class="form-control" id="user_name" name="username" placeholder="Nhập tên đăng nhập" 
                value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="pass_word">Password</label>
                <input type="password" class="form-control" id="pass_word" name="pass_word" placeholder="Nhập mật khẩu"
                value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
            </div>
            <div class="check-box">
                <label>
                    <input type="checkbox" name="remember" id="remember" 
                    <?php echo isset($checked) && $checked ? "checked" : ""; ?> > Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-default" name="login">Login</button>
        </form>
        <?php 
            if (isset($message)) {
                echo "<p style='color:red;'>$message</p>";
            }
        ?>
    </div>
<?php
    $message = "";
    // Xử lý khi nhấn Login
    if(isset($_POST["login"])){
        $user_name =($_POST["username"]);
        $password =($_POST["pass_word"]);

    if($_POST["remember"]){
            setcookie("user_name", $user_name, time() + time()+60*60);
            setcookie("password", $password, time()+60*60);
        }
    }
    $user_name = $password = "";
    $checked = false;

    // Lấy dữ liệu từ cookie
    if(isset($_COOKIE["user_name"]) && isset($_COOKIE["password"])){
        $user_name = $_COOKIE["user_name"];
        $password = $_COOKIE["password"];
        $checked = true;
    }

    // Kiểm tra tài khoản
    $arrData = array('user_name' => "admin", 'password' => "123456");

    if($arrData["user_name"] == $user_name && $arrData["password"] == $password){
        $_SESSION["userInfo"] = $arrData;
    }else {
        $message = "Sai tài khoản hoặc mật khẩu!";
    } 
?>
</body>
</html>
