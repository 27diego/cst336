<?php
session_start();


if (!isset($_SESSION['username'])) {  //checks whether the admin is logged in
    header("Location: login.php");
}

function userList(){
  include 'database.php';
  $conn = getDatabaseConnection();

  
  $sql = "SELECT *
          FROM User";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
  //print_r($records);
  return $records;
    
}





?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Main Page </title>
        
        <style>
        @import url("css/styles.css");
        </style>
        
        <script>
            function confirmDelete()
            {
                return confirm("Are you sure?");
            }
            
            
        </script>
        
    </head>
    <body>

            <h1> Admin Main </h1>
            <h2> Welcome <?=$_SESSION['adminName']?>!</h2>
            
            
            <div id="adduserButtons">
            <form action="addUser.php">
                
                <input type="submit" value="Add new user" />
                
            </form>
            <br />
            
             <form action="logout.php">
                
                <input type="submit" value="Log out" />
                
            </form>
            </div>
            
            <?php
            
              $users = userList();
             
            //  foreach($users as $user) {
                 
            //      echo $user['id'] . " " . $user['firstName'] . " " . $user['lastName'] . "<br />";
                 
                 
                 
            //  }
             
             
            
             //$rs = userList();
             foreach($users as $user)
             {
                 echo $user['id'] . " " . $user['firstName'] . " " . $user['lastName'] . "<br />";
                 
                 echo"[<a href = 'updateUser.php? userId=".$user['id']."'> Update</a>] <br />";
                 echo"[<a onclick='return confirmDelete()' href = 'deleteUser.php? userId=".$user['id']."'> Delete</a>] <br />";
             }
                
                
                
             ?>
            
    </body>
</html>