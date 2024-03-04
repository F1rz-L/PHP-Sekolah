<nav>
    <ul>
        <li><a href='?menu=lat01'>Lat 01</a></li>
        <li><a href='?menu=lat02'>Lat 02</a></li>
        <li><a href='?menu=lat03'>Lat 03</a></li>
    </ul>
</nav>

<?php 
    
    // if (isset($_POST['kirim'])) {
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    
    //     echo $email;
    //     echo '<br>';
    //     echo $password;
    // }
    
    if(isset($_GET['menu'])){
        $menu=$_GET['menu'];
    
        require_once $menu.'.php';
      }
?>  