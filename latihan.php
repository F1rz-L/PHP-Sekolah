<form action="" method="get">
    nama : <input type="text" name="nama">
    alamat : <input type="text" name="alamat" >
    <input type="submit" name="kirim" value="simpan">
    </form>

<?php 
    // echo "<h1>Aku keren banget</h1>";
    // $tulisan = 'Saya belajar';
    // echo $tulisan;
    // $tulisan = 30;
    // echo $tulisan . "Hai" . "<br>";
    // var_dump($tulisan);
    // echo "<br><br>";

    // function belajar(){
    //     echo "saya Keren" . 30;
    // }
    // belajar();

    // $rat = array("tejo", "budi", "siti");
    // foreach ($rat as $key) {
    //     echo $key;
    // }

    // $email = $_POST['email'];
    // if(isset($_POST['kirim'])){
    // echo $_POST['email'];
    // echo '<br>';
    // echo $_POST['passw'];
    // }
    
    if(isset($_POST['kirim'])){
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    echo "<br>";
    echo $nama;
    echo "<br>";
    echo $alamat;
    }  
?>

