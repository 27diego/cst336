<?php
include 'database.php';
$conn = getDatabaseConnection();

    function departmentList(){
      
        global $conn;
        
        $sql = "SELECT * FROM admin ORDER BY name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $records;
    }


if (isset($_GET['addAdmin'])) {  //the add form has been submitted

    $sql = "INSERT INTO admin
                (firstName, lastName, username, password) 
            VALUES
                (:firstName, :lastName, :username, :password)";
    $np = array();
    $np[':firstName'] = $_GET['firstName'];
    $np[':lastName'] = $_GET['lastName'];
    $np[':username'] = $_GET['username'];
    $np[':password'] = $_GET['password'];
    
    $stmt=$conn->prepare($sql);
    $stmt->execute($np);
    
    echo "User was added!";
}


?>





<!DOCTYPE html>
<html>
    <head>
        <title>Admin: Add new user</title>
        <style>
            body {
                text-align: center;
                background-color: #002351;
                font-family: 'Lobster';
                color:#ffffff;
                font-size: 100%;
                background-image:url('img/guitar.jpg');
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
            }
        </style>
    </head>
    <body>


       <h1> Adding New User </h1>

        <h1> Tech Checkout System: Adding a New User </h1>

        
        <form method="GET">
            First Name:<input type="text" name="firstName" />
            <br />
            Last Name:<input type="text" name="lastName"/>
            <br/>
            username: <input type= "text" name ="username"/>
            <br/>
            Password: <input type ="password" name= "password"/>
            <br />
          
            <input type="submit" value="Add User" name="addAdmin">
        </form>

    </body>
</html>