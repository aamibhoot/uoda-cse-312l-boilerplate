<!-- Connect to Database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse312_*";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>