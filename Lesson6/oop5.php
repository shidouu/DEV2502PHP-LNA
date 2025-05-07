<?php
    class Pheptinh{
        //Phương thức
        function tinhTong($arryParam){
            if(is_array($arryParam)){
                $tong=0;
                foreach($arryParam as $item){
                    $tong +=$item;
                }
                echo "<h2> $tong";
            }
            else
                echo $arryParam;
        }
    }

    $arr = [10,20,30,40];
    $pt = new Pheptinh();
    $pt->tinhTong($arr);

    echo "<hr/>";
    $arr ="Devmaster";
    $pt->tinhTong($arr);
?>