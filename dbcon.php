<?php
$conn = new PDO('mysql:host=localhost;dbname=kscs_forum', 'root', '');
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kscs_forum";

//create connection
$con = mysqli_connect($host, $username, $password, $dbname);
//check connection if it is working or not
if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}
?>
