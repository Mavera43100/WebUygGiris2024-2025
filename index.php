<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// 3 sayıdan en büyüğünü bulan program
$a = 105;
$b = 60;
$c = 15;

if($a > $b && $a > $c){
    echo "En büyük sayı: $a";
}
elseif($b > $a && $b > $c){
    echo "En büyük sayı: $b";
}
else{
    echo "En büyük sayı: $c";
}   
?>
</body>
</html>
