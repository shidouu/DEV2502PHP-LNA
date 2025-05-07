<?php
    if(isset($_REQUEST["btnClearCookie"])){
        setcookie("nguoidung","AnhLe",time()-60*60);
       
        //Chuyển sang trang index.phps
        header("Location: index.php");
    }
?>
<header> 
    <div class="container boder my-2">
        <div class="row">
            <div class="logo">
                <a href="">
                    <img src="https://devmaster.edu.vn/images/logo.png" alt="Devmaster">
                </a>
            </div>
            <div class="head-title">
                <h2>Viện đào tạo công nghệ Devmaster</h2>
                <p>Đào tạo-Phần mềm-Cung cấp/cho thuê nhân sự</p>
            </div>
            <div>
                <h2>Lấy giá trị từ Cookie</h2>
                <?php
                    // in ra 1 giá trị
                    echo"Xin chào: <b>".$_COOKIE["nguoidung"]."</b>";
                    echo "<p>";
                    print_r($_COOKIE);
                ?>
                <form action="" method="post">
                    <button name="btnClearCookie"> clear cookie</button>
                </form>
            </div>
        </div>
    </div>
</header>