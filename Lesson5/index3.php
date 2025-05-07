<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file ảnh</title>
</head>
<body>
<?php 
        $fileUpload = "";
        $name = "";
        if(isset($_POST["upload"])){
            $name = trim($_POST["fileName"]);
            if(isset($_FILES["avata"]) && $_FILES["avata"]["name"] != ""){
                
                $fileType = $_FILES["avata"]["type"];
                $fileSize = $_FILES["avata"]["size"];
                $fileError = $_FILES["avata"]["error"];

                if($fileType == 'image/jpeg' || $fileType == 'image/png'){
                    if($fileError == 0){  
                        if($fileSize <= 2048000){
                            $tmpFile = $_FILES["avata"]["tmp_name"];

                            $destDir = "uploads/";
                            if (!file_exists($destDir)) {
                                mkdir($destDir, 0777, true);
                            }
                            $fileExtension = pathinfo($_FILES["avata"]["name"], PATHINFO_EXTENSION);
                            $fileUpload = $destDir . (!empty($name) ? $name : time()) . '.' . $fileExtension;

                            move_uploaded_file($tmpFile, $fileUpload);

                            echo "File đã được upload thành công!<br>";
                        } else {
                            echo "File lớn hơn 2MB!";
                        }

                    } else {
                        echo "File bị lỗi!";
                    }

                } else {
                    echo "Chỉ chấp nhận file định dạng JPG hoặc PNG!";
                }

            } else {
                echo "Chưa có file!";
            }
        }
    ?>
    <?php 
        if(isset($name)){
            echo $name."</br>";
        ?>
            <img src="<?php echo $fileUpload; ?>" alt="<?php echo $name; ?>" width="150" />
        <?php } ?>

    <h1>Upload file</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <caption><h2>Upload File</h2></caption>
            <tr>
                <td>File Name</td>
                <td>
                    <input type="text" name="fileName" id="fileName" placeholder="Nhập tên ảnh">
                </td>
            </tr>
            <tr>
                <td>Image File</td>
                <td><input type="file" name="avata" id="avata"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Upload" name="upload">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
