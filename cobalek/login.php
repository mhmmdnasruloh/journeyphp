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
