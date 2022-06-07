<?php 
$conn = mysqli_connect("localhost","root","","mohamed") or die("connection failed");
$query = "create table user(id INT(6) PRIMARY Key,name varchar(30) NOT NULL)";

if(mysqli_query($conn,$query)){
    echo "Success";
}
else{
    echo "Failed";
}

?>

<!-- This is Simple MySQL DataBase Connection in Php -->