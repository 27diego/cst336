<?php
session_start();
if (!isset($_SESSION['username'])) {  //checks whether the admin is logged in
    header("Location: login.php");
}
function songList(){
  include 'database.php';
  $conn = getDatabaseConnection();
  
  $sql = "SELECT *
          FROM Songs";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
  return $records;
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Main Page </title>
        
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
            <form action="addSong.php">
                
                <input type="submit" value="Add new Song" />
                
            </form>
            <br />
            
            
             <div id="addAdminButton">
            <form action="addAdmin.php">
                
                <input type="submit" value="Add new Admin" />
                
            </form>
            <br />
            
            
             <form action="logout.php">
                
                <input type="submit" value="Log out" />
                
            </form>
            
             <form action="reports.php">
                
                <input type="submit" value="View Reports" />
                
            </form>
            </div>
            
            <?php 
            
              $users = songList();
           
             foreach($users as $user)
             {
                 echo "ID: ". $user['id'] . " Name: " . $user['name'] . " Artist: " . $user['artist'] . "<br />";
                 
                 echo"[<a href = 'updateSong.php? userId=".$user['id']."'> Update</a>] <br />";
                 echo"[<a onclick='return confirmDelete()' href = 'deleteSong.php? userId=".$user['id']."'> Delete</a>] <br />";
             }
                
                
                
             ?>
            
    </body>
</html>