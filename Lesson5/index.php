<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc nội dung từ file thuchanhtxt</title>
</head>
<body>
    <h1>Đọc nội dung từ file thuchanh.txt</h1>
    <hr>
    <?php
        $file = fopen("thuchanh.txt","r") or exit("Không đọc được file");
        while(!feof($file)){
            echo "<li>". fgets($file) ;
        }
        fclose($file);
    ?>
    <hr>
    <h2>Đọc từng kí tự:</h2>
        <?php 
            $file = fopen("thuchanh.txt","r") or exit("Không đọc được file");

            while(!feof($file)){
                $ch = fgetc($file);
                $ch = mb_convert_encoding($ch,'UTF-8','auto');
                echo "<br>" .$ch;
            }
            fclose($file);
        ?>
    <h2>Đếm số lần người truy cập bấm F5</h2>
    <?php
        $txtfile ="dem.txt";
        $file = fopen($txtfile,'r') or die("file không tồn tại");
        $count = fread($file,'1024');

        echo "Số lần truy cập : " . $count = $count+1;
        fclose($file);

        $file = fopen($txtfile, 'w') or die("file không tồn tại");
        fwrite($file, $count);
        fclose($file); 
    ?>
</body>
</html>