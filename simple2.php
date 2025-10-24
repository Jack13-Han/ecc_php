<?php

$fruit = ["リンゴ", "バナナ", "梅", "ぶとう", "キウイ"];
$fruit2 = array("リンゴ2", "バナナ2", "梅2", "ぶとう2", "キウイ2");


echo "<pre>";
echo var_dump($fruit2);
echo "</pre>";

$fruit2[8] = "スイカ2";

echo "<pre>";
echo print_r($fruit2);
echo "</pre>";

$fruitsAll = array($fruit, $fruit2);



echo "<pre>";
echo print_r($fruitsAll);
echo "</pre>";


$list = [
    "ID" => "2250266",
    "name" => "Han Wai Tun",
    "class" => "IE1A",
];


echo $list["name"];
echo "<br>";

foreach ($list as $l) {
    echo $l . "<br>";
};

foreach ($fruitsAll as $fruitGroup) {
    foreach ($fruitGroup as $fruitItem) {
        echo $fruitItem . "<br>";
    }
}



?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Simple</title>
</head>

<body>
    <h2>PHP での表示</h2>
    
    <p>
        学籍番号 : <?= $list["ID"]; ?> <br>
        名前 :<?= $list["name"]; ?> <br>
        クラス : <?= $list["class"]; ?>
    </p>

    <script src="node_modules/bootstrap//dist/js/bootstrap.min.js"></script>
</body>

</html>