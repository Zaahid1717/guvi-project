<?php
$hostname="localhost";
$dbname="user";
$username="root";
$password="";

$email=$_POST['email'];
$password=$_POST['password'];

$conn=mysqli_connect($hostname,$username,$password,$dbname);


$sql="INSERT INTO `user`(`id`,`email` ,`password`) VALUES('0','$email','$password')";

if(mysqli_connect_errno()){
    echo "registration failed";
    exit();
}
echo "registration success";

$rs=mysqli_query($conn,$sql);





?>