<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// creating database connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if(!$conn)
{
    die("failed to connect". mysqli_connect_error());
}
else{
    echo "connection successful";
}
?> 