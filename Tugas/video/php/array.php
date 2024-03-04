<?php 
    // Array Dimensi

    // $nama = array("Joni","Tejo","Budi","Siti",100,2.5);

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";

    // for ($i=0; $i < 6 ; $i++) { 
    //     // echo $i;
    //     echo $nama[$i] . "<br>";
    // }

    // foreach ($nama as $key) {
    //     echo $key . '<br>';
    // }

    // Array asosiatif

    // $nama = array(
    //     "Joni" => "Surabaya",
    //     "Budi" => "Kediri",
    //     "Tejo" => "Gresik",
    //     "Siti" => "Jakarta" 
    // );

    $nama["Joni"]="Sidoarjo";
    $nama["Budi"]="Malang Raya";
    $nama["Tejo"]="Bandung";
    $nama["Siti"]="Sidoarjo";

    var_dump($nama);
    echo "<br>";
    // echo $nama['Budi'];

    foreach ($nama as $key => $value) {
        echo $key . " => " . $value;
        echo "<br>";
    }
?>