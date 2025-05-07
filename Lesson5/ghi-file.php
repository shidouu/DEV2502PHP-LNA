<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghi nội dung vào file</title>
</head>
<body>
    <h1>Ghi nội dung vào file</h1>
    <?php
        $fileName="ghi-file.txt";
        $file = fopen($fileName,"w");
        
        $noi_dung = "Devmaster";
        fwrite($file,$noi_dung);

        $noi_dung = "Academy\n";
        fwrite($file,$noi_dung);

        fclose($file);
    ?>
    <h1>Đọc và hiển thị</h1>
    <?php
        $file = fopen($fileName, "r");
        while(!feof($file)){
            echo "<h2>" . fgets($file);
        }
        fclose($file);
    ?>

    <h2>Ghi thêm vào file</h2>
    <?php
        $file = fopen($fileName, "a") or die("Lỗi");
        $noi_dung = "Lê Ngọc Anh";
        fwrite($file,$noi_dung);
        fclose($file);
    ?>
    <h1>Đọc và hiển thị</h1>
    <?php
        $file = fopen($fileName, "r");
        while(!feof($file)){
            echo "<h2>" . fgets($file);
        }
        fclose($file);
    ?>
</body>
</html>