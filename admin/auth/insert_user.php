<?php
require("../../db/connect.php");
session_start();

$name=!empty($_POST['name']) ? trim($_POST['name']) : '';
$email=!empty($_POST['email']) ? trim($_POST['email']) : '';
$password=!empty($_POST['password']) ? trim($_POST['password']) : '';
$confirm_password=!empty($_POST['confirm_password']) ? trim($_POST['confirm_password']) : '';
$error=[];  
if($name==''){
    $error[]="ism kiritilmagan";
}
if($email==''){
    $error[]="email kiritilmagan";
}
if($password==''){
    $error[]="parol kiritilmagan";
}
if($confirm_password==''){
    $error[]="parolni tasdiqlash kiritilmagan";
}
if($password != $confirm_password){
    $error[]="parol va parolni tasdiqlash mos emas";
}
if(strlen($password) < 6){
    $error[]="parol 6 ta belgidan kam bo'lmasligi kerak";
}
if(count($error)>0){
    $_SESSION['errors']=$error;
    header("Location: register.php");
    exit();
}
else{
    try{
        $sql="INSERT INTO users (name,email,pass) VALUES(:name,:email,:pass)";
        $stmt=$conn->prepare($sql);
        $stmt->execute([
            ':name'=>$name,
            ':email'=>$email,
            ':pass'=>hash('md5', $password)
        ]);
    } catch(PDOException $e) {
        echo "Xatolik yuz berdi: " . $e->getMessage();
    }

}