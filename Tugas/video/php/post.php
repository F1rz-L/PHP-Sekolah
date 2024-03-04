<form action="nav.php" method="post">
    Email :
    <input type="email" name="email">
    Password :
    <input type="password" name="password">
    <input type="submit" name="submit" value="login">
</form>

<?php 
    
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        echo $email;
        echo '<br>';
        echo $password;
    }
    
?>