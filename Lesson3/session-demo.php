<?php 
    session_start();
    echo "<h1> Đây là phiên làm  việc của người dùng:" .session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Demo</title>
</head>
<body>
    <h1>Session demo</h1>
    <?php 
        echo "<h2>Lưu giá trị vào session";
        $_SESSION["member"]=["Lê Ngọc Anh"];
    ?>
</body>
</html>