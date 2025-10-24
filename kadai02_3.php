<?php

$fruit=[
    "apple"=>220,
    "banana"=>110,
    "strawberry"=>490,
    "grape"=>550,
    "kiwi"=>160,
];

$vegetable=[
    "cabbage"=>130,
    "carrot"=>80,
    "greenPepper"=>120,
    "eggplant"=>160,
    "pumpkin"=>240,
];


$food=[
    "food"=>$fruit,
    "vegetable"=>$vegetable,
];


foreach($fruit as $name=>$value){
    echo "<pre>";
    echo $name .":". $value ."円";
    echo "</pre>";
};


foreach($food as $foodMarket=>$values){
    echo "種別:".$foodMarket;
   foreach($values as $foodItem=>$value){
    // echo "種別".$food["food"] ;
        echo "<pre>";
    echo "商品名 :".$foodItem."\t/\t価格：". $value;
    echo "</pre>";
   }
}
echo "<pre>";
echo var_dump($food);
echo "</pre>";



// echo "<pre>";
// echo var_dump($foodItem);
// echo "</pre>";
?>