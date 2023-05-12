<?php
    // Perbedaan declare variable dan constant biassasnya variable menggunakan $ dan constant tidak menggunakan $
    // Constant tidak bisa diubah nilainya
    // Constant bisa diakses dimana saja
    // Constant bisa diakses tanpa harus diinisialisasi

    $variable = "ini variable";
    define('cons', 'ini constant');
    
    echo $variable;
    echo '<br>';
    echo cons;

    echo '<br>';
    echo '<br>';

    // Contoh dalam funtion/scope
    function coba(){
        echo $variable;
        echo '<br>';
        echo cons;
    }

    coba();
?>