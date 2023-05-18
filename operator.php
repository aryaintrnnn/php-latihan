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

    // Increment/Decrement Operator
    // ++$a = + 1 + $a
    // $a++ = $a + 1
    // --$a = - 1 - $a
    // $a-- = $a - 1

    echo "Pre-Increment";
    echo '<br>';
    echo ++$a;
    echo '<br>';
    echo $a;
    echo '<br>';
    echo '<br>';

    echo "Post-Increment";
    echo '<br>';
    echo $a++;
    echo '<br>';
    echo $a;
    echo '<br>';
    echo '<br>';

    echo "Pre-Decrement";
    echo '<br>';
    echo --$a;
    echo '<br>';
    echo $a;
    echo '<br>';
    echo '<br>';

    echo "Post-Decrement";
    echo '<br>';
    echo $a--;
    echo '<br>';
    echo $a;
    echo '<br>';
    echo '<br>';
    
    // Logical Operator
    // && (and), || (or), ! (not)

    $l = 4;
    $m = 3;

    // && (and) kedua kondisi harus sama
    var_dump($l > 1 && $m > 1); // True
    echo '<br>';
    var_dump($l > 1 && $m > 10); // False
    echo '<br>';
    echo '<br>';

    // || (or) kedua kondisi tidak harus sama
    var_dump($l > 1 || $m > 1); // True
    echo '<br>';
    var_dump($l > 1 || $m > 10); // True
    echo '<br>';
    echo '<br>';

    // xor, hanya 1 yang benar
    var_dump($l > 1 xor $m > 1); // false
    echo '<br>';
    var_dump($l > 1 xor $m > 10); // True
    echo '<br>';
    echo '<br>';

    // ! (not)
    var_dump($l > 1 != $m > 1); // false
    echo '<br>';
    var_dump($l > 1 != $m > 10); // True

    // String Operator
?>