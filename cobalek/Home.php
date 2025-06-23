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
  <title>Login/Register Box</title>
  <style>
    body {
      font-family: arial, sans-serif;
      background-color: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 300px;
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      margin-top: 10px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    .switch {
      margin-top: 10px;
      text-align: center;
      font-size: 0.9em;
    }

    .switch a {
      color: #007bff;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Login</h2>
    <form>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <div class="switch">
      Belum punya akun? <a href="register.php">Register</a>
    </div>
  </div>

</body>
</html>
