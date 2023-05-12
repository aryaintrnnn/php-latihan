<?php
    // Variabel tidak bisa diawali dengan angka & simbol, tapi boleh mengandung angka & simbol
    // Global variable hanya bisa dikenali di luar function
    // Local variable hanya bisa dikenali di dalam function
    // Static variable hanya bisa dikenali di dalam function, tapi nilainya tidak akan hilang meskipun functionnya sudah dijalankan

    // Global Variable
    
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

    // Local Variable

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

    // Contoh lain memanggil global variable dalam funtion
    $phi = 3.14;

    function klllingkaran(){
        global $phi; // Memanggil variabel global
        $r = 10;
        $kll = 2 * $phi * $r;
        echo $kll;
    }

    function klllingkaran2(){
        global $phi; // Memanggil variabel global
        $r = 15;
        $kll = 2 * $phi * $r;
        echo $kll;
    }

    echo '<br>';
    echo '<br>';
    echo 'Keliling lingkaran 1 adalah: ';
    klllingkaran();
    echo '<br>';
    echo 'Keliling lingkaran 2 adalah: ';
    klllingkaran2();

    // Static Variable

    function panggil2(){
        static $x = 1; // Static Variable
        echo $x;
        $x++; // x = x + 1
    }

    // Jika hanya memanggil 1x, maka nilai x = 1, tetapi jika memanggil 2x maka nilai x = 2 dan seterusna

    echo '<br>';
    echo '<br>';
    panggil2(); 
    echo '<br>';
    panggil2();

?>

