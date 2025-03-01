<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fa">
<link rel="stylesheet" href="../assets/styles.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
</head>
<body>

<h2>ورود به حساب کاربری</h2>

<form action="../controllers/logincontrollers.php" method="POST">
    <label for="email"> :ایمیل</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="password"> :رمز عبور</label>
    <input type="password" name="password" id="password" required><br><br>

    <button type="submit" name="login">ورود</button>
</form>
<a href="../welcome.html">  بازگشت</a>
</body>
</html>
