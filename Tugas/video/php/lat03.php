<?php
    function belajar(){
        echo "saya belajar PHP";
    }

    function luaspersegi($p = 15, $l = 20){
    $luas = $p * $l;

    echo $luas;
    }

    echo "<br>";

    function luas($p, $l){
    $luas = $p * $l;

    return $luas;
    }

    function output(){
        return "function";
    }

    echo luas(20,40) * 8;
?>