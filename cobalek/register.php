<?php
include 'db1.php' ;
session_start () ;

if (isset($_POST['register'])) {
    $user =$_POST['username'];   
    $pass =password_hash($_POST['password'],PASSWORD_DEFAULT);

    $sql="INSERT INTO users (username,password) VALUES ('$user', '$pass')";
    if($conn->query($sql)) {
        echo "register berhasil" ;
        header("Location: Home.php") ;
        exit ;
    } else {
        echo "gagal : " . $conn->error ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="text-align: center">
<h2>Form register </h2>
<form method="post"> 
    <input type= "text" name="username" placeholder="username" required> <br>
    <input type= "text" name="password" placeholder="password" required> <br>
    <button type= "submit" name="register"> register </button> <br>
</div>
</form>
</body>
</html>
