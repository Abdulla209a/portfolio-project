<?php
session_start();

require("connect.php");

$name=!empty($_POST['name']) ? trim($_POST['name']) : '';
$email=!empty($_POST['email']) ? trim($_POST['email']) : '';                
$subject=!empty($_POST['subject']) ? trim($_POST['subject']) : '';
$message=!empty($_POST['message']) ? trim($_POST['message']) : '';

$errors=[];
if($name==""){
    $errors[]="Ism kiriting";
}
if($email==""){
    $errors[]="Email kiriting";
}
if($subject==""){
    $errors[]="Mavzunnn kiriting";
}
if($message==""){
    $errors[]="Xabarnn kiriting";
}

if(count($errors)>0){
    $_SESSION['errors']=$errors;
    header("Location: ../index.php");
    
}
else{
    try {
        $sql="INSERT INTO contacts(name,email,subject,message,view) VALUES(:name,:email,:subject,:message,:view)";
        $stmt=$conn->prepare($sql);
        $stmt->execute([
            ':name'=>$name,
            ':email'=>$email,
            ':subject'=>$subject,
            ':message'=>$message,
            ':view'=>0
        ]);
        $_SESSION['success']="Xabar muvaffaqiyatli yuborildi";
        header("Location: ../index.php");
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }
}


 

?>