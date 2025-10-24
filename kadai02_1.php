<?php
    $fruits =["リンゴ", "バナナ", "梅", "ぶとう", "キウイ"];
    $fruits[]="パイナップル";

    echo "<pre>";
    echo print_r($fruits);
    echo "</pre>";

    $fruits[0]="スイカ";
     echo "<pre>";
    echo print_r($fruits);
    echo "</pre>";
    
?>
