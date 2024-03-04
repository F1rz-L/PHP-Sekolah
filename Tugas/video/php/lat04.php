<?php 
    // OPERATOR MATEMATIKA
    $a = 2;
    $b = 5;

    $c = $a + $b;
    echo $c . '<br>';

    $c = $a - $b;
    echo $c . '<br>';

    $c = $a * $b;
    echo $c . '<br>';

    $c = $a / $b;
    echo floor ($c) . '<br>';

    $c = $a % $b;
    echo $c . '<br>';


    $c = $a < $b;
    echo $c;

    $c = $a > $b;
    echo $c;

    $c = $a == $b;
    echo $c . '<br>';

    $c = $a != $b;
    echo $c . '<br>';


    $a++;
    echo $a . '<br>';


    $kata = 'Sido';
    $kota = 'arjo';

    $hasil = $kata . $kota;

    $hasil .= ' Kota Delta';
    echo $hasil;
?>