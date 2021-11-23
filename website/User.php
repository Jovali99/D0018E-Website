<!DOCTYPE html>
<html>
<head>
<title>User Information</title>
</head>
<body>

<h1>
    <!--(Insert get user name)SELECT --> (User) Information
</h1>

<form action="/UpdateUserInfo.php">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="Temp"><br>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Temp"><br>

    <label for="email">E-mail:</label><br>
    <input type="text" id="email" name="email" value="Temp"><br>

    <label for="passw">Password:</label><br>
    <input type="text" id="passw" name="passw" value="Temp"><br>

    <label for="address">address:</label><br>
    <input type="text" id="address" name="address" value="Temp"><br>

    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" value="Temp"><br>

    <label for="zipc">Zip code:</label><br>
    <input type="text" id="zipc" name="zipc" value="Temp"><br>

    <label for="mphone">Mobilephone number:</label><br>
    <input type="text" id="mphone" name="mphone" value="Temp"><br>

    <input type="submit" value="Save">

    
</form>

<?php
/*
$hostname = "130.240.200.34";
$username = "phpmyadmin";
$password = "Martinis";
$dbname = "Website";
$port = "3306";
$socket = null;

//Establsh a connection
$conn = new mysqli($hostname, $username, $password, $dbname);
//Checks for failure
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($result->num_rows > 0) {
    
    
} else {
    echo "0 results";
}

$conn->close();
*/
?>

</body>
</html>