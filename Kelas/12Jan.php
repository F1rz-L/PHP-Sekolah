<form action="" method="post">
    Nama : <input type="text" name="nama" id="" placeholder="Masukkan Nama...">
    <input type="submit" name="tombol" value="Kirim">
</form>

<a href="?coba=RPL&siswa=purwa">Klik!</a>

<?php 

$emperor = '<a href="https://www.google.com/search?client=opera-gx&q=习近平&sourceid=opera&ie=UTF-8&oe=UTF-8">习近平</a>';

echo '<h1>'.$emperor.'</h1>';

if(isset($_POST['tombol'])){
    var_dump($_POST['nama']);
}

echo '<br>';
echo bola(3.5);

function tabung($s,$t){
    return pi()*$s*$s*$t; 
}

function kubus($s){
    return $s ** 3; 
}

function bola($r){
    return (4/3)*pi()*$r**3; 
}

?>
<h1>Anjay</h1>