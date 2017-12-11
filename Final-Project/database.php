// <?php
// function getDatabaseConnection()
// {
    
    
//     $host = "localhost";
//     $username = "root";
//     $password = "cst336";
//     $dbname="tech_devices_app";
    
    
// // Create connection
//     $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     return $conn;
    
//   }
// ?>

<?php
function getDatabaseConnection()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname="singles";

// Create connection
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

return $conn;
}



//username:b3d374bc5def80
//password:6038e853
//host name:us-cdbr-iron-east-05.cleardb.net
//database name:heroku_876ef2f60b62635




?>


