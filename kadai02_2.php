<?php
$fruits = ["リンゴ", "バナナ", "梅", "ぶとう", "キウイ"];

$vegetable = ["キャベツ", "人参", "ピーマン", "茄子", "かぼちゃ"];

echo "<pre>";
echo var_dump($fruits);
echo "</pre>";

echo "<pre>";
echo var_dump($vegetable);
echo "</pre>";

$food = array($fruits, $vegetable);

echo "<pre>";
echo var_dump($food);
echo "</pre>";


// foreach($food as $foodMarket){
//     foreach($foodMarket as $foodItem){
//         echo $foodItem."<br>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>

        $food 2行3列目は
        <?= $food[1][2] ?>

        です。
    </p>
</body>

</html>