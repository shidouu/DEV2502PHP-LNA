<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc nội dung từ file text</title>
</head>
<body>
    <h1>Đọc nội dung từ file text</h1>
    <hr>
    <?php
        $file = fopen("doc-file.txt","r") or exit("Không đọc được file");
        // Đọc từng dòng cho đến khi kết thúc fgets
        while(!feof($file)){
            echo "<li>". fgets($file) ;
        }

        //Đóng file
        fclose($file);
    ?>
    <hr>
    <h2>Đọc từng kí tự:</h2>
        <?php 
            $file = fopen("doc-file.txt","r") or exit("Không đọc được file");
            // Đọc từng kí tự
            while(!feof($file)){
                $ch = fgetc($file);
                $ch = mb_convert_encoding($ch,'UFT-8','auto');
                echo "</br>" . $ch;
            }
            fclose($file);
        ?>
</body>
</html>