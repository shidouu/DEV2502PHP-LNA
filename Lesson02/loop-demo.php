<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For demo</title>
</head>
<body>
    <h1>Loop demo
    <hr>
    <?php
        for($i=1; $i <=10;$i++){
            echo "$i ; ";
        }

        echo"<p> while: ";
        $i = 1;
        while($i<=10){
            echo "$i ; ";
            $i++;
        }

        echo"<p>do... while: ";
        $i = 1;
        do{
            echo "$i ; ";
            $i++;
        } while($i<=10);

        $array = ["Hùng","Dũng","Sang","Trọng"];
        foreach($array as $item){
            echo "$i ; ";
        }
        echo "<p>";
        print_r($array);
    ?>
</body>
</html>