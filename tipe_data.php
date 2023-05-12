<?php
    // String
    // String pada umumnya ditandai dengan simbol ' atau "

    // Cara mengecek string
    var_dump("Hello World");
    var_dump('10');

    echo '<br>';
    echo '<br>';

    // Perbedaan menggunaan ' dan "
    $hewan = "Kucing";

    echo "Menggunakan petik 2";
    echo "<br>";
    var_dump("Saya punya $hewan"); //Variable akan dibaca sebagai kucing
    echo "<br>";
    echo "Menggunakan petik 1 "; 
    echo "<br>";
    var_dump('Saya punya $hewan'); //Variable tidak akan dibaca sebagai kucing melainkan $hewan

    echo "<br>";
    echo "<br>";

    // Integer
    // Integer merupakan angka bulat(tidak menggunakan koma)
    // Integer tidak perlu menggunakan tanda petik
    // Integer bisa menggunakan tanda + atau - di depan angka

    $angka = 10;
    var_dump($angka);

    echo "<br>";
    echo "<br>";

    // Float
    // Float merupakan angka desimal(menggunakan koma)
    // Float tidak perlu menggunakan tanda petik
    // Float bisa menggunakan tanda + atau - di depan angka

    $float = 10.5;
    var_dump($float);

    echo "<br>";
    echo "<br>";

    // Boolean
    // Boolean merupakan tipe data yang hanya memiliki 2 nilai yaitu true dan false
    // Boolean tidak perlu menggunakan tanda petik
    // Pada umumnya di gunakan untuk kebutuhan conditional
    // Merupakan hasil dari sebuah proses

    $boolean = 10;
    var_dump(is_int($boolean)); // Hasilnya akan true karena 10 merupakan integer

?>