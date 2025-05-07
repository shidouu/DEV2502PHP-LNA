<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thực hành số 5</title>
    <style>
        #main{
            height: 35px;
            background: #ccc;
            margin: 0 auto;
            width: 800px;
        }
        #main ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #main ul li{
            float: left;
            border-right: solid 1px #fff;
        }
        #main ul li a{
            text-decoration:none;
            color: #000;
            display: block;
            padding: 8px 15px;
        }
        #main ul li a:hover, .selected{
            background: #792b90;
            color: #fff !important;
        }
        #language{
            right: 0;
            position: absolute;
        }
    </style>
</head>
<body>
    <?php 
     if(!isset($_GET["lang"]) || $_GET["lang"]=="vi"){
        $arrMenu = array(
            "home" => "Trang chủ",
            "about" => "Giới thiệu",
            "product" => "Sản phẩm",
            "service" => "Dịch vụ",
            "contact" => "Liên hệ"
         );
        }else{
            $arrMenu = array(
                "home" => "Home",
                "about" => "About",
                "product" => "Product",
                "service" => "Service",
                "contact" => "Contact"
             );
        }
    ?>
    <div id="main">
        <nav>
            <ul>
                <?php 
                    $i=0;
                    foreach ($arrMenu as $key => $value){
                        $i++;
                        $selected="";
                        if(!isset($_GET["view"]) && $i==1){
                            $selected = 'class = "selected"';
                        }
                        elseif (isset($_GET["view"]) && $_GET["view"] == $key) {
                            $selected = 'class = "selected"';
                        }
                ?>
                <li>
                    <a <?php echo $selected; ?> href="index5.php?view=<?php echo $key;?>
                    &lang=<?php echo isset ($_GET['lang'])?$_GET['lang']:"" ?>">
                        <?php echo $value; ?>
                    </a>
                </li>
                <?php
                    }
                ?>
            </ul>
            <ul id="language">
                <li><a href="index5.php?view=<?php 
                        echo isset ($_GET["view"])?$_GET["view"]:"home"
                        ?>&lang=vi">VI</a>
                </li>
                <li><a href="index5.php?view=<?php 
                        echo isset ($_GET["view"])?$_GET["view"]:"home"
                        ?>&lang=en">EN</a>
                </li> 
            </ul>
        </nav>
    </div>
</body>
</html>