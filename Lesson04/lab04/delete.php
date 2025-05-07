<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="tinymce/tinymce.min.js"></script>
    <script src="js/editor.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
</head>
<body>
    <?php 
        if(isset($_GET["id"])){
            include("connect.php");
            $sql = "DELETE FROM tbl_user WHERE user_id = ".$_GET["id"];
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':user_id' => $_GET["id"]]);

            header("location:select.php");
            exit;
        }
    ?>
</body>
</html>