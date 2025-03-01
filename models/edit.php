<?php
require_once '../config/config.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="select * from users where id=:id";

    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);

    $stmt->execute();

    $user=$stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "کاربر پیدا نشد!";
        exit;
    }
} else {
    echo "آی‌دی ارسال نشده است!";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $email = $_POST['email'];
    $password=$_POST['password'];

    $sql = "UPDATE users SET FirstName = :FirstName,LastName = :LastName,email = :email, password= :password WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':FirstName', $FirstName);
    $stmt->bindParam(':LastName', $LastName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location:../models/users.php");
        exit;
    } else {
        echo "مشکلی در ویرایش کاربر به وجود آمد!";
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<link rel="stylesheet" href="../assets/styles.css">
<head>
    <meta charset="UTF-8">
    <title>ویرایش کاربر</title>
</head>
<body>
    <h1>ویرایش کاربر</h1>
    <form method="POST" action="">
        <label>:نام</label>
        <input type="text" name="FirstName" value="<?php echo $user['FirstName']; ?>" required>
        <br>
        <label> :نام خانوادگی</label>
        <input type="text" name="LastName" value="<?php echo $user['LastName']; ?>" required>
        <label>:ایمیل</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        <br>
        <label>:رمز عبور </label>
        <input type="text" name="password" value="<?php echo $user['password']; ?>" required>
        <br>
        
        <button type="submit">ویرایش</button>
    </form>
    <a href="../models/users.php">بازگشت به داشبورد</a>
</body>
</html>







