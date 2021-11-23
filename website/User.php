<!DOCTYPE html>
<html>
<head>
<title>User Information</title>
</head>
<body>

<h1>
    <!--(Insert get user name)SELECT --> (User) Information
</h1>



<?php

$hostname = "130.240.200.34";
$username = "phpmyadmin";
$password = "Martinis";
$dbname = "Website";
$port = "3306";
$socket = null;

//Establsh a connection
$conn = new mysqli($hostname, $username, $password, $dbname, $port, $socket);
//Checks for failure
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($result->num_rows > 0) {
    
    
} else {
    echo "0 results";
}

$conn->close();

?>

</body>
</html>