<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
</head>
<body>
    <?php
echo '<h2>Khai báo biến trong PHP<h2/>';
echo 'Khai báo biến a=11.5';
$A = 11.5;
echo "giá trị của biến a $A </br>";
echo 'kiểu giá trị của biến a là '.gettype($A).'<br/>';
echo 'chuyển đổi kiểu dữ liệu của biến a về số nguyên <br/>';
$A = (int) $A;
echo 'Biến a đã chuyển từ kiểu Double về kiểu nguyên '.$A.'--';
echo gettype($A);
echo '<br/>';
echo 'chuyển đổi biến a từ double về int của biến a <br/>';
$A = (float) $A;
echo "biến sau khi đã chuyển đổi có giá trị là $A.0 và kiểu ".gettype($A).'<br/>';
echo 'chuyển đổi biến a từ kiểu double sang kiểu string <br/>';
$A = (string) $A;
echo "Biến a sau khi đã chuyển đổi từ kiểu double sang string có giá trị '$A' và kiểu dữ liệu ".gettype($A);
?>
</body>
</html>