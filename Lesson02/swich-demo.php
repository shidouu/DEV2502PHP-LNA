<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Swich demo</h1>
    <?php
        echo "<h2>";
        echo "<p> switch.... case";
        #cho 1 số nguyên dương từ 1-7 => in ra thứ trong tuần
        $num = 1;
        echo date("Y-m-d H:i:s");
        $dayOfWeek = date("1");
        echo "<p> $dayOfWeek";
        switch ($num){
            case 1:
                echo "<p>Chủ nhật";
                break;
            case 2:
                echo "<p>Thứ hai";
                break;
            case 3:
                echo "<p>Thứ ba";
                break;
            case 4:
                echo "<p>Thứ tư";
                break;
            case 5:
                echo "<p>Thứ năm";
                break;
            case 6:
                echo "<p>Thứ sáu";
                break;
            case 7:
                echo "<p>Thứ bảy";
                break;
            default:
                echo "<p>Bạn nhập sai";
        }
    ?>
</body>
</html>