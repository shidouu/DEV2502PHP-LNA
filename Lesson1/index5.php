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
                <td>
                    <input type="text" name="tensp" id="tensp">
                </td>
            </tr>
            <tr>
                <td>Loại sản phẩm</td>
                <td>
                    <select name="loaisp" id="loaisp">
                        <option value="dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Acer">Acer</option>
                        <option value="Asus">Asus</option>
                        <option value="Sony">Sony</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td>
                    <input type="number" name="gia" id="gia">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Tìm kiếm" name="timkiem" id="timkiem">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>