<?php

session_start();
if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}

    include 'database.php';
    $conn = getDatabaseConnection(); 

function getUserInfo()
{
    global $conn;
     
    $sql = "SELECT *
            FROM Songs
            WHERE id = ".$_GET['id'];;
            
            $stmt = $conn->prepare($sql);
            $stmt->execute($namedParameters);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            print_r($record);
            
            return $record;
    
}

function departmentList(){
      
        global $conn;
        
        $sql = "SELECT * FROM Songs ORDER BY name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $records;
    }


if(isset($_GET['updateSong']))
{
    //echo "Form has been submitted";
    
    $sql="UPDATE Songs 
        SET name = :name,
        SET artist = :artist
        SET genre = :genre
        SET album = :album
        SET typeName = :typeName
        SET price = :price
        WHERE id = :id";
        
    $np = array();
        
    $np[':name'] = $_GET['name'];
    $np[':artist'] = $_GET['artist'];
    $np[':genre'] = $_GET['genre'];
    $np[':album'] = $_GET['album'];
    $np[':typeName'] = $_GET['typeName'];
    $np[':price'] = $_GET['price'];
    $np[':id'] = $_GET['id'];
    
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np); //finish
    
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}



if(isset($_GET['userId']))
{
    $userInfo = getUserInfo();
}

?>



<!DOCTYPE html>

<head>
    
    <title>Update</title>
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
    <h1>Update Song</h1>
    
      <h1> Tech Checkout System: Updating User's Info </h1>
        <form method="GET">
             <input type="hidden" name="userId" value="<?=$userInfo['id']?>" />
            <br />
            Song Name:<input type="text" name="name" value="<?=$userInfo['name']?>" />
            <br />
            Artist Name:<input type="text" name="artist" value="<?=$userInfo['artist']?>"/>
            <br/>
            Genre: <input type= "text" name ="genre" value="<?=$userInfo['genre']?>"/>
            <br/>
            Album: <input type= "text" name ="album" value="<?=$userInfo['album']?>"/>
            <br/>
            Type: <input type= "text" name ="typeName" value="<?=$userInfo['typeName']?>"/>
            <br/>
            Price: <input type= "number" name ="price" value="<?=$userInfo['price']?>"/>
            <br/>
            
            <input type="submit" value="Update Song" name="updateSong">
        </form>
        
        <form action="catalog.php">
             <input type="submit" value="Catalog" name="Catalog">
        </form>
</body>

</html>