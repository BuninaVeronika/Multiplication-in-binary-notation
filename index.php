<!DOCTYPE html>
<html>
    <head>
        <title>0*1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="left">
            <div class="form">
                <h3>Введите числа в двоичной системе счисления</h3>
                <form method="GET" action="index.php">
                    <input type="text" name="one"><br>
                    *<br>
                    <input type="text" name="two"><br>
                    <input type="submit" value="Ответ" id="hey">
                </form>
            </div> 
        </div>
        <div class="right">
            
            
        <?php
        $one=$_GET['one'];
        $two=$_GET['two'];
        if(!empty($one) and !empty($two)){
        echo "<h1>Со смещением влево-результат:</h1>";
        for($i=0; $one>0; $i++){
            $who=$one%10;
            $pow[$i]=$who*pow(2, $i);
            $sum=array_sum($pow);
            $one=intval($one/10);
            $arr[$i]=$who;
            
        }
        krsort($arr);
        $er=implode("", $arr);
        
        for($iy=0; $two>0; $iy++){
            $whoy=$two%10;
            $powy[$iy]=$whoy*pow(2, $iy);
            $sumy=array_sum($powy);
            $two=intval($two/10);
            $arry[$iy]=$whoy;
        }
        krsort($arry);
        $result= count($arry);
        $ery=implode("", $arry);
        
        $obsum=$sum*$sumy;
        echo $er;
        echo '<br>*<br>';
        echo $ery;
        echo '<br>';
        echo '<hr>';
        $taktobezparsinga=implode("", $arr);
        $dlaymnogenia=bindec($taktobezparsinga);
        $probel="";
        for ($a=0; $a<$result; $a++){
            $resultу=$arry[$a]*$dlaymnogenia;
            echo decbin($resultу);
            echo $probel;
            echo '<br>';
            $probel.="..";
            
        }
        echo '<hr>';
        echo decbin($obsum);
        ?>
           <div class="krayleft"> 
            <h1>Со смещением вправо-результат:</h1>
        <?php
        $one=$_GET['one'];
        $two=$_GET['two'];
        for($i=0; $one>0; $i++){
            $who=$one%10;
            $pow[$i]=$who*pow(2, $i);
            $sum=array_sum($pow);
            $one=intval($one/10);
            $arr[$i]=$who;
            
        }
        krsort($arr);
        $er=implode("", $arr);
        
        for($iy=0; $two>0; $iy++){
            $whoy=$two%10;
            $powy[$iy]=$whoy*pow(2, $iy);
            $sumy=array_sum($powy);
            $two=intval($two/10);
            $arry[$iy]=$whoy;
        }
        krsort($arry);
        $result= count($arry);
        $ery=implode("", $arry);
        
        $obsum=$sum*$sumy;
        echo $er;
        echo '<br>*<br>';
        echo $ery;
        echo '<br>';
        echo '<hr>';
        $taktobezparsinga=implode("", $arr);
        $dlaymnogenia=bindec($taktobezparsinga);
        $probel="";
        for ($a=0; $a<$result; $a++){
            $resultу=$arry[$a]*$dlaymnogenia;
            echo $probel;
            echo decbin($resultу);
            echo '<br>';
            $probel.="..";
            
        }
        echo '<hr>';
        echo decbin($obsum);
    }
        ?>
           </div>
            </div>
    </body>
</html>
