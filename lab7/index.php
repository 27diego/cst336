<?php
session_start();

function loginProcess() {

    if (isset($_POST['loginForm'])) {
    
        include 'dbConnection.php';
        $conn = getDatabaseConnection("ottermart");
      
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
            $sql = "SELECT * 
            FROM admin
            WHERE username = :username
            AND   password = :password";    
            
            $np = array();
            $np[":username"] = $username;
            $np[":password"] = $password;
    

                    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //expecting one single record
            
            if (empty($record)) {
        
            echo "Wrong username or password!";
            
        } else {
            
            
                //echo $record['firstName'] . " " . $record['lastName'];
                $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
                header("Location:admin.php");
            
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> OTTER LOGIN  </title>
        <style>
             form {
                display: inline;
            }
            body {
                text-align: center;
                background-color: #002351;
                color:red;
                font-size: 125%;
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
            }
        </style>
    </head>
    <body>
        <span class="login">

            <h1> OTTER LOGIN </h1>
            
            <form method="post">
                
                Username: <input type="text" name="username"/> <br />
                
                Password: <input type="password" name="password" /> <br />
                <input type="submit" class="loginBtn" name="loginForm" value="Login!"/>
                
            </form>

            <br />
            
            <?=loginProcess()?>
            </span>
    </body>
</html>