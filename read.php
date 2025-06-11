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

$sql = mysqli_query($conn, "SELECT * FROM user");

$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

exit(json_encode($result));