<?php 
    // $nama = array('Tejo','Budi','Siti',100);
    // var_dump($nama);

    // echo '<br>';

    // foreach ($nama as $key) {
    //     echo $key . '<br>';
    // }


    $nama = array(
        "Tejo" => "Gresik",
        "Budi" => "Madura",
        "Siti" => "Sidoarjo"
    );

    var_dump($nama);
    echo '<br>';

    foreach ($nama as $a => $b) {
        echo $a . ' - ' . $b;
        echo '<br>';
    }
    
?>