<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo-if</title>
    <style>
        *{
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <h1>If demo</h1>
    <?php
        $num = 10;
        if ($num > 0) {
            echo "<p> $num là số dương";
        }
        if ($num % 2 == 0) {
            echo "<p> $num là số chẵn";
        } else {
            echo "<p> $nume là số lẻ";
        }

        if ($num > 0) {
            echo "<p> $num là số dương";
        }else if ($num <0 ) {
            echo "<p> $num là số âm";
        }else{
            echo "<p> $num là số không";
        }

        if($num >0){
            if($num %2 == 0){
                echo "<p> $num là số chẵn";
            }else {
                echo "<p> $num là số lẻ";
            }
        }
    ?>
</body>
</html>