<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "soma";

$conn=mysqli_connect($host,$user,$password,$database);

//connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//registartion process
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

 $sql = "SELECT * FROM students WHERE email ='$email'";
 $result = mysqli_query($conn,$sql);

 if(mysqli_num_rows($result) == 0){
    //hashing a password
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);
    $sql = "INSERT INTO students(name,email,password) 
            VALUES('$name','$email','$hashed_password')";

    mysqli_query($conn,$sql);
     //echo 'data inserted successful' . $hashed_password;
     header('location:soma.php');
 }else{
    echo "user already exists";
 }
}

//login process
if(isset($_POST["Log In"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

$sql = "SELECT * FROM students WHERE email ='$email' AND password= '$password'";
$hashed_pasword = password_hash($password,PASSWORD_DEFAULT);
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 1){
    header('location:home.php');
}else{
    echo "user already exists";
}

}


