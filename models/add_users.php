
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<link rel="stylesheet" href="../assets/add_user.css">
<head>
    <meta charset="UTF-8">
    <title>اضافه کردن کاربر جدید</title>
</head>
<body>

<h2>اضافه کردن کاربر جدید</h2>
<form action="../controllers/add_user_controller.php" method="POST">
    <label for="name">نام:</label>
    <input type="text" id="name" name="FirstName" required><br>
    <label for="family"> نام خانوادگی:</label>
    <input type="text" id="family" name="LastName" required><br>

    <label for="email"> ایمیل:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password"> رمز عبور:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="role">نقش:</label>
    <select id="role" name="role">
        <option value="user">کاربر عادی</option>
        <option value="admin">ادمین</option>
    </select><br>

    <button type="submit">اضافه کردن</button>
</form>

<a href="../models/users.php">بازگشت به داشبورد</a>

</body>
</html>