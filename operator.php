<?php
    // Arithmetic Operator
    $a = 4;
    $b = 5;

    $c = $a + $b; //Penjumlahan
    $d = $a - $b; //Pengurangan
    $e = $a * $b; //Perkalian
    echo $c;
    echo '<br>';
    echo $d;
    echo '<br>';
    echo $e;

    // Assignment Operator
    
    $f = $a;
    $g = 1;
    $g += $a; // $g = $g + $a

    echo '<br>';
    echo '<br>';

    echo $f;
    echo '<br>';
    echo $g;
    echo '<br>';
    echo '<br>';

    // Comparison Operator

    $h = 5;
    $i = 5;
    $j = 10;
    $k = "10";

    var_dump($i == $j); // Sama dengan
    echo '<br>';
    var_dump($h==$i);
    echo '<br>';
    echo '<br>';
    var_dump($a != $b); // Tidak sama dengan
    echo '<br>';
    var_dump($h!=$i);
    echo '<br>';
    echo '<br>';
    var_dump($h === $i); // Identik
    echo '<br>';
    var_dump($j === $k); // Identik
    echo '<br>';
    echo '<br>';

?>