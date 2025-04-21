<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Gửi dữ liệu khi submit form
    if (isset($_REQUEST['btnSubmit'])) {//Khi người dùng nhấn vào submit
        //lây dữ liệu trên form bằng $_REQUEST
        $name = $_REQUEST['txtfullname'];
        $age = $_REQUEST['txtAge'];
        echo '<h1> _REQUEST </h1>';
    }
    ?>
    <h1>Làm việc với form</h1>
    <hr/>
    <form name="myForm" method="get" action="">
        <p>Name:
            <input type="text" name="txtFullName" value=""/>
        </p>
        <p>Age:
            <input type="number" name="txtAge" value=""/>
        </p>
        <p>
            <input type="submit" name="txtSubmit" value="submit"/>
        </p>
    </form>
</body>
</html>