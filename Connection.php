<?php
$servername = "localhost";
$username = "getsalle_jnvadm";
$password = "h6ThDXr404mt";
$dbname = "getsalle_dbadm";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
}
?>
