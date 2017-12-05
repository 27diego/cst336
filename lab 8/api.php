<?php



function getDatabaseConnection() {
   $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b119de0738f57d";
     $password = "e7a7d062";
     $dbname="heroku_e279ab2381964e7";
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}



function getUsersThatMatchUserName() {
    
    $username = $_GET['username']; 

    
     $dbConn = getDatabaseConnection(); 

     $sql = "SELECT * from User WHERE username='$username'"; 
     
     $statement = $dbConn->prepare($sql); 
    
     $statement->execute(); 
     $records = $statement->fetchAll(); 
     echo json_encode($records); 
}


getUsersThatMatchUserName(); 

?>
