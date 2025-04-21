<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP</title>
</head>
<body>
    <h1>Welcome t PHP</h1>
    <?php
    // day la cau lenh cua ngon ngu php
    echo'<h2> Welcome to php';
    // bien
    $name = 'anh';
    $age = 20;
    //hien thi gia tri cua bien
        echo"<p> Name: $name";
        echo"<p> Age: $age";
        echo '<hr/>';

    // Hang
    define('DEVMASTER', 'Vien cong nghe va dao tao Devmaster');
    echo 'DEVMASTER';

    // Toan tu, bieu thuc, toan hang...
    $a = 112;
    $b = 23;
    //su dung phep toan so hoc
    $res = $a + $b;
    echo "<p> $a + $b = $res";
    // phep toan so sanh

    ?>
</body>
</html>