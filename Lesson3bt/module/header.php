<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php?view=home">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?view=about">Giới thiệu</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?view=product">Máy tính xách tay</a></li>
                            <li><a class="dropdown-item" href="index.php?view=product">Máy tính bảng</a></li>
                            <li><a class="dropdown-item" href="index.php?view=product">Điện thoại di động</a></li>
                            <li><a class="dropdown-item" href="index.php?view=product">Phụ kiện</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="index.php?view=service">Dịch vụ</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?view=contact">Liên hệ</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?view=login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php
    if(isset($_SESSION["userInfo"])){
        echo "<h3>Xin chào, " . $_SESSION["userInfo"]["user_name"] . "!</h3>";
        echo '<li><a href="index.php?view=logout">Logout</a></li>';
    }else{
    ?>
        <li><a href="index.php?view=logout">Login</a></li>
    <?php
    } 
?>