<?php
session_start();


?>

<!DOCTYPE html>
<html lang="fa">
<link rel="stylesheet" href="../assets/styles.css">
<head>
    <meta charset="UTF-8">
    <title>ثبت‌نام</title>
</head>
<body>
    <h2>فرم ثبت‌نام</h2>
    <form action="../controllers/registercontroller.php" method="POST">
        <label for="name"> :نام </label>
        <input type="text" id="name" name="FirstName" required>
        <br>
        <label for="family"> :نام خانوادگی </label>
        <input type="text" id="family" name="LastName" required>
        <br>
        <label for="email"> :ایمیل</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password"> :رمز عبور</label>
        <input type="password" id="password" name="password" required>
        <br>

        <button type="submit">ثبت‌نام</button>
    </form>
    <a href="../welcome.html">  بازگشت</a>
</body>
</html>
