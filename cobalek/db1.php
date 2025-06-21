<?php 
$host = "localhost" ; 
$user = "root";
$pass = "" ;
$db  = "cobalek" ;


$conn = new mysqli ($host,$user,$pass,$db) ;

if($conn -> connect_error){
    die("koneksi gagal coy :".$conn-> connect_error) ;
}

?>
