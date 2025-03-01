<?php

require_once '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql="delete from users where id=:id";

    $stm=$pdo->prepare($sql);

    $stm->bindParam(':id',$id,PDO::PARAM_INT);

    if ($stm->execute()) {
        header("Location: users.php");
        exit;
    } else {
        echo "مشکلی در حذف کاربر به وجود آمد!";
    }
}








?>