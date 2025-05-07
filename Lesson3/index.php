<?php 
    session_start();
    echo "<h1> Đây là phiên làm  việc của người dùng:" .session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trang chủ</title>
</head>
<body>
    <?php 
        //header
        include("fragments/header.php");
    ?>
    <section class="container border my-1">
        <div class="row">
            <?php 
                require("fragments/nav-bar.php");
            ?>
        </div>
    </section>
    <section class="content-body container boder my-1">
        <?php 
            // include("fragments/navbar.php");
        ?>
        <?php 
            include("fragments/footer.php");
        ?>
    </section>
    <?php 
        if(isset($_REQUEST["btnClearSession"])){
            unset($_SESSION["member"]);//hủy biến session member
            //hủy toàn bộ biến
            session_destroy();
        }
    ?>
    <section>
        <h2>Lấy giá trị từ session</h2>
        <?php 
            if(isset($_SESSION["member"])){
                echo "Xin chào, ".$_SESSION["member"];
            }else{
                echo "Chưa lưu session";
            }
        ?>
        <form action="" method="post">
            <button name="btnClearSession">Hủy session</button>
        </form>
    </section>
</body>
</html>