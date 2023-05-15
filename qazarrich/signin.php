
<?php include "blocks/header.php"; ?>


<?php
require_once('db.php');

$login = $_POST ['login'];
$pass = $_POST ['pass'];

if(empty($login) || empty($pass))
{
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "Добро пожаловать" . $row['login'];
        }
    } else {
        echo "Пользователь не зарегистрирован";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="signin.php" method="post">
        <input type="text" placeholder="login" name="login"> <br>
        <input type="text" placeholder="password" name="pass"> <br>
        <button type="submit">Вход</button> <br>
</form>
</body>
</html>

<?php include "blocks/footer.php"; ?>