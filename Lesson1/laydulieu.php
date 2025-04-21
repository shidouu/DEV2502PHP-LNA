<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3</title>
</head>
<body>
    <form action="" method="post">
        <table width="450">
            <caption>
                <h2>Thông tin đăng ký</h2>
            </caption>
            <tr>
                <td>Tên đăng nhập</td>
                <td><?php echo $_POST['username']; ?></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><?php echo $_POST['password']; ?></td>
            </tr>
            <tr>
                <td>Họ Tên</td>
                <td><?php echo $_POST['fullname']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $_POST['email']; ?></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td><?php echo $_POST['gioitinh']; ?></td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>
                    <?php
                    $sothich = $_POST['sothich'];
$i = 0;
foreach ($sothich as $key => $value) {
    ++$i;
    if ($i == 1) {
        echo $value;
    } else {
        echo ','.$value;
    }
}
                    ?>
                </td>
            </tr>
            <tr>
                <td>Tỉnh thành</td>
                <td><?php echo $_POST['tinhthanh']; ?></td>
            </tr>
            <tr>
                <td valign="top">Mô tả</td>
                <td>
                <td><?php echo $_POST['mota']; ?></td>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Đồng ý" name="submit" id="submit" />
                    <input type="reset" value="Làm lại" name="reset" id="reset" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>