<?php

require_once '../config/config.php';
session_start();

if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];



    try{
        $sql="select * from users where email=:email limit 1";

        $stmt=$pdo->prepare($sql);

        $stmt->bindParam(':email',$email);

        $stmt->execute();

        if($stmt->rowCount()>0){

            $user=$stmt->fetch(PDO::FETCH_ASSOC);
        


            if($password==$user['password']){

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_role'] = $user['role'];
                if($user['role']==='admin'){
                    header('Location:../models/users.php');
                    exit;
                } else{
                    header('Location:../views/not_admin.html');
                    //echo "شما دسترسی ادمین ندارید";
                }


            }else{
                header('Location:../views/wrong_password.html');
                  //  echo "رمز عبور اشتباه است";

                }
            }

        else{
            header('Location:../views/no_user_found.html');
           // echo " کاربری با این نام وجود ندارد";
            }
        
    }catch(PDOException $e){

        echo "خطا در اتصال به دیتابیس:". $e->getMessage();
    }
}











?>