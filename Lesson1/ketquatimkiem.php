<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4</title>
</head>
<body>
<form action="ketquatimkiem.php" method="get">
        <table width="300">
            <caption>
                <h2>Tìm kiếm sản phẩm</h2>
            </caption>
            <tr>
                <td>Tên sản phẩm</td>
                <td><?php echo $_GET['tensp']; ?></td>
            </tr>
            <tr>
                <td>Loại sản phẩm</td>
                <td><?php echo $_GET['loaisp']; ?></td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td>
                <td><?php echo $_GET['gia']; ?></td>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>