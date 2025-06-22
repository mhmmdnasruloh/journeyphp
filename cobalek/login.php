<?php
include 'db1.php' ;
session_start () ;

if(isset($_POST['login'])){
    $username =$_POST ['username'];
    $password =$_POST['password'];

    $query ="SELECT * fROM users WHERE username='$username'";
    $result =$conn -> query($query);

    if ($result->num_rows === 1 ){
        $data=$result -> fetch_assoc () ;
        if ( password_verify($password,$data['password'])){
          $_SESSION['username'] =$username ;
           header ("Location: halaman.php") ;
            exit ;
        } else {
            echo"password salah";
        }
    } else {
        echo"user tidak di temukan";
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
<body style="text-align : center ">

<h2>Form login </h2>
<form method="post"> 
    <input type="text" name="username" placeholder="username" required> <br>
    <input type="text" name ="password" placeholder="password" required> <br>
    <button type="submit" name="login"> login </button> <br>
</form>

</body>
</html>
