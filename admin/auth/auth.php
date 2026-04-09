<?php
require("../../db/connect.php");
session_start();
$email=!empty($_POST['email']) ? trim($_POST['email']) : '';
$password=!empty($_POST['password']) ? trim($_POST['password']) : '';
$error=[];

if($email==''){
  $error[]="Email kiritilmagan";
}else{
  $sql="SELECT * FROM users WHERE email LIKE :email";

  $stmt=$conn->prepare($sql);
  $stmt->execute([
    ':email'=>$email
    ]);

    $john=$stmt->fetch();

if($john==false){
      $error[]="Bunday email mavjud emas";
}else{

if(hash('md5',$password) == $john['pass']){
  $_SESSION["user_id"]=$john['id'];
  header("Location: ../index.php");
exit();  }
else{
  $error['password_error']="Parol xato";
}
}
}
if(count($error)>0){
  $_SESSION['errors']=$error;
  header("Location: login.php");
  exit();
}
?>