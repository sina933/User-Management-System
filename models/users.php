<?php
require_once '../config/config.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    die("لطفا ابتدا وارد شوید <a href='login.php'>ورود</a>");
}

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="fa">
<link rel="stylesheet" href="../assets/styles.css">

<head>
    <meta charset="UTF-8">
    <title>لیست کاربران</title>
</head>

<body>
    <h1>لیست کاربران</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>نام </th>
                <th> نام خانوادگی</th>
                <th>ایمیل</th>
                <th>رمز عبور </th>
                <th>نقش</th>
                <th>تغییرات</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['FirstName']; ?></td>
                    <td><?php echo $user['LastName']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td>
                        
                        <a href="edit.php?id=<?php echo $user['id']; ?>">ویرایش</a> |
                        <a href="delete.php?id=<?php echo $user['id']; ?>" onclick="return confirm('آیا مطمئن هستید؟')">حذف</a>
                    </td>
        
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="button-container">
    <a class="button" href="../models/add_users.php">اضافه کردن کاربر جدید</a>
    <br>
    <a class="button" href="../welcome.html">خروج</a>
    </div>
    

</body>
</html>
