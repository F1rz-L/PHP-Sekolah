<?php 

session_start();

echo $_SESSION['user'];
echo $_SESSION['nama'];
echo $_SESSION['alamat'];

echo "<br>";

foreach ($_SESSION as $key => $value) {
    echo $key. "=>" .$value. '<br>';
}
?>