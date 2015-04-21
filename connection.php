<?php
$servername = "localhost"; // set your server address.
$username = "jakir"; // set your database username 
$password = "94QyzcBuCzvVeUDB"; // give your db user password 
$dbname = "wordproject"; // change this to your data base name



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>