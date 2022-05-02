<?php
include 'model/connect-and-authorise.php';
$conn = getConnection();

if(isset($_POST['login']))
{
    $email=$_POST['username'];
    $password=$_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindValue(':email',$email);
    $stmt->execute();
    $login=false;

if($row = $stmt->fetch()){
    if (password_verify($password, $row['password'])){
    $login=true;
    }
}
if($login){
    $_SESSION["user"]=$email;
    $_SESSION["role"]=$row['role'];
    header( "Location: index.php" );
} else {
    $_SESSION["error_msg"]="Incorrect Login Details";
    header("Location: login.php");
}
} else {
header("Location: login.php");
}

?>