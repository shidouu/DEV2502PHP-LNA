<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3</title>
</head>
<body>
    <form name="myForm" action="laydulieu.php" method="post">
        <table width="450">
            <caption>
                <h3>Đăng ký thành viên</h3>
            </caption>
            <tr>
                <td>Tên đăng nhập</td>
                <td>
                    <input type="text" name="username" id="username" placeholder="Tên đăng nhập" />
                </td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td>
                    <input type="password" name="password" id="password" placeholder="Mật khẩu" />
                </td>
            </tr>
            <tr>
                <td>Họ Tên</td>
                <td>
                    <input type="text" name="fullname" id="fullname" placeholder="Họ tên" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" id="email" placeholder="Thư điện tử" />
                </td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="gioitinh" id="nam" value="Nam" />
                    <label for="nam">Nam</label>
                    <input type="radio" name="gioitinh" id="nu" value="Nữ" />
                    <label for="nu">Nữ</label>
                </td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>
                    <input type="checkbox" name="sothich[]" id="dabong" value="Đá bóng" />
                    <label for="dabong">Đá bóng</label>
                    <input type="checkbox" name="sothich[]" id="caulong" value="Cầu lông" />
                    <label for="caulong">Cầu lông</label>
                    <input type="checkbox" name="sothich[]" id="dulich" value="Du lịch" />
                    <label for="dulich">Du lịch</label>
                    <input type="checkbox" name="sothich[]" id="nghenhac" value="Nghe nhạc" />
                    <label for="nghenhac">Nghe nhạc</label>
                    <input type="checkbox" name="sothich[]" id="bongban" value="Bóng bàn" />
                    <label for="bongban">Bóng bàn</label>
                </td>
            </tr>
            <tr>
                <td>Tỉnh thành</td>
                <td>
                    <select name="tinhthanh" id="tinhthanh">
                        <option value="">--Chọn tỉnh--</option>
                        <option value="hanoi">Hà Nội</option>
                        <option value="haiphong">Hải Phòng</option>
                        <option value="hochiminh">Hồ Chí Minh</option>
                        <option value="hungyen">Hưng Yên</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td valign="top">Mô tả</td>
                <td>
                    <textarea cols="20" rows="5" name="mota" id="mota" placeholder="Mô tả thông tin"></textarea>
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