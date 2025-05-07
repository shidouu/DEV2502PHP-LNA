<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thực hành số 1</title>
</head>
<body>
    <form action="" method="post">
        <table wight="250">
            <caption><p>Giải phương trình bậc 2</p>ax <sup>2</sup>+bx+c = 0</caption>
            <tr>
                <td>Số a</td>
                <td>
                    <input type="text" name="soa" id="soa" />
                </td>
            </tr>
            <tr>
                <td>Số b</td>
                <td>
                    <input type="text" name="sob" id="sob" />
                </td>
            </tr>
            <tr>
                <td>Số c</td>
                <td>
                    <input type="text" name="soc" id="soc" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Giải phương trình " name="giaipt">
                </td>
            </tr>
        </table>
    </form>
    <?php 
        if(isset($_POST["giaipt"])){
            $soa = $_POST["soa"];
            $sob = $_POST["sob"];
            $soc = $_POST["sob"];
            if($soa==0){
                if($sob==0){
                    if($soc=0){
                        echo "Phương trình vô số nghiệm";
                    }else{
                        echo "Phương trình vô nghiệm";
                    }
                }else{
                    echo "Phương trình có nghiệm : x = " .$soc/$sob;
                }
            }else{
                $delta = $sob*$sob-4*$soa*$soc;

                if($delta >0){
                    $x1 = (-$sob+sqrt($delta))/(2*$soa);
                    $x2 = (-$sob-sqrt($delta))/(2*$soa);
                    echo "Nghiệm của phương trình : <br />";
                    echo "x1 = $x1 <br />";
                    echo "x2 = $x2 <br />";
                }elseif($delta==0){
                    $x = -$sob/(2*$soa);
                    echo "Phương trình có nghiệm kép: x1 = x2 = ".$x."<br />";
                }else{
                    echo "Phương trình vô nghiệm";
                }
            }
        }
    ?>
</body>
</html>