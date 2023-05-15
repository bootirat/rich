
<?php include "blocks/header.php"; ?>


<?php
require_once('db.php');
$login = $_POST ['login'];
$pass = $_POST ['pass'];
$repeatpass = $_POST ['repeatpass'];
$email = $_POST ['email'];

$sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass', '$email')";

$conn -> query($sql);

?>
    <form action="signup.php" method="post">
        <input type="text" placeholder="login" name="login"><br>
        <input type="text" placeholder="password" name="pass"><br>
        <input type="text" placeholder="repeat password" name="repeatpass"><br>
        <input type="text" placeholder="email" name="email"><br>
        <button  type="submit">Зарегистрироваться</button><br>
    </form>



<?php include "blocks/footer.php"; ?>

