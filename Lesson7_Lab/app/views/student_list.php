<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sinh Viên</title>
</head>
<body>
    <h1>Quản Lý Sinh Viên</h1>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Khoa</th>
                <th>Môn Học</th>
                <th>Sinh Viên</th>
                <th>Kết Quả</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student): ?>
            <tr>
                <td><?php echo $student['khoa'];?></td>
                <td><?php echo $student['monhoc'];?></td>
                <td><?php echo $student['sinhvien'];?></td>
                <td><?php echo $student['ketqua'];?></td>
                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>