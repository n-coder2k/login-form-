<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'trash');

$username = $_POST['username'];
$password = $_POST['password'];

$s = " select * from trash where username = '$username' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num > 0){
    echo "username already taken";
}
else{
    $reg = " insert into trash(username, password) values ('$username', '$password')";
    mysqli_query($con, $reg);
    echo "Registration Successfull";
}
?>