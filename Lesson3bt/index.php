<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <title>Trang chủ</title>
</head>
<body>
    <?php 
        include("module/header.php");
        include("module/jumbotron.php");
    ?>
    <div class="container">
        <div class="row">
            <?php 
                if(isset($_GET["view"])){
                    include("module/".$_GET["view"].".php");
                }else{
                    include("module/home.php");
                }
            ?>
        </div>
    </div>
    <?php include("module/footer.php"); ?>
</body>
</html>