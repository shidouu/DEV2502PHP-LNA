<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["Login"])){
            $userName = $_POST["userName"];
            $password = $_POST["password"];
            $account = 'account.txt';

            $file = fopen($account, 'a') or die("File không tồn tại");
            fwrite($file, $userName.'<>'.$password."----");

            fclose($file);
        }
    ?>
    <form action="" method="post">
        <table>
            <caption><h2>Login</h2></caption>
            <tr>
                <td>UserName</td>
                <td>
                    <input type="text" name="userName" id="userName" placeholder="Tên đăng nhập">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" id="password" placeholder="Mật khẩu">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login" name="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>