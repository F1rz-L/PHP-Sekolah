<?php

$nama_cookie = 'user';
$isi_cookie = 'joni';

setcookie($nama_cookie, $isi_cookie);


$isi_cookie = 'tejo';

setcookie($nama_cookie, $isi_cookie);

echo $_COOKIE[$nama_cookie];

setcookie("user", "", time() - 3600);

echo '</br>';

var_dump($_COOKIE);

?>