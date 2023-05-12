<?php
    // Variabel tidak bisa diawali dengan angka & simbol, tapi boleh mengandung angka & simbol
    // Global variable hanya bisa dikenali di luar function
    // Local variable hanya bisa dikenali di dalam function
    
    $name = "Arya Intaran"; // Global Variable
    $panjang = 5;
    $lebar = 3;

    echo $name;
    echo '<br>';

    echo '<br>';
    echo 'Panjangnya adalah :'  .$panjang;
    echo '<br>';
    echo 'Lebarnya adalah :'  .$lebar;
    echo '<br>';


    function Panggil(){
        $sisi = 5; // Local Variable

        echo '<br>';
        echo 'Sisinya adalah: ' .$sisi;
        echo '<br>';
    }
    
    Panggil(); // Memanggil fungsi/function

    function Globalvar(){
        global $panjang, $lebar; // Memanggil variabel global

        echo 'Panjangnya adalah :'  .$panjang;
        echo '<br>';
        echo 'Lebarnya adalah :'  .$lebar;
    }

    Globalvar(); // Memanggil fungsi/function

?>

