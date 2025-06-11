<?php
//connection
$name = "localhost";
$username = "root";
$password = "";
$database = "fetchdatabase";

$conn = mysqli_connect($name,$username,$password,$database);

if($conn){
    echo "connected database";
}else{
    echo "error:";
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "INSERT INTO user (firstname, lastname, username, password) VALUES 
                    ('$fname', '$lname', '$username', '$password')");
 if($sql){
    echo "<div class='alert alert-primary' role='alert'>Inserted Success!.</div>";
 }else{
   echo "<div class='errorPopUp'>Inserted Success!.</div>";

 }                  