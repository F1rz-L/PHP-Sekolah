<form action="" method="get">
        Tgl Lahir : <input type="date" name="tgll" id="">
        <input type="submit" name="submit" value="Cek!" >
</form>

<?php 
    $zodiak = "Tidak Tentu";
    $bln = explode("-", $_GET['tgll'])[1];
    $tgl = explode("-", $_GET['tgll'])[2];
    
    if(isset($_GET['submit'])){
        if($bln == 1&& $tgl >= 20 || $bln == 2 && $tgl <= 18){
            $zodiak = "Aquarius";
        }
        if($bln == 2&& $tgl >= 19 || $bln == 3&& $tgl <= 20){
            $zodiak = "Pisces";
        }
        if($bln == 3&& $tgl >= 21 || $bln == 4 && $tgl <= 19){
            $zodiak = "Aries";
        }
        if($bln == 4&& $tgl >= 20|| $bln == 5 && $tgl <= 20){
            $zodiak = "Taurus";
        }
        if($bln == 5&& $tgl >= 21 || $bln == 6 && $tgl <= 20){
            $zodiak = "Gemini";
        }
        if($bln == 6&& $tgl >= 21 || $bln == 7&& $tgl <= 22){
            $zodiak = "Cancer";
        }
        if($bln == 7&& $tgl >= 23 || $bln == 8 && $tgl <= 22){
            $zodiak = "Leo";
        }
        if($bln == 8 && $tgl >= 23 || $bln == 9 && $tgl <= 22){
            $zodiak = "Virgo";
        }
        if($bln == 9&& $tgl >= 23 || $bln == 10&& $tgl <= 22){
            $zodiak = "Libra";
        }
        if($bln == 10 && $tgl >= 23|| $bln == 11 && $tgl <= 21){
            $zodiak = "Scorpio";
        }
        if($bln == 11 && $tgl >= 22 || $bln == 12 && $tgl <= 21){
            $zodiak = "Sagitarius";
        }
        if($bln == 12 && $tgl >= 22 || $bln == 1 && $tgl <= 19){
            $zodiak = "Capricorn";
        }

        echo "<h1>".$zodiak."</h1>";
    }
?>