<?php
include 'database.php';
$conn = getDatabaseConnection();

    function songList(){
      
        global $conn;
        
        $sql = "SELECT * FROM Songs ORDER BY name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $records;
    }


if (isset($_GET['addSong'])) {  //the add form has been submitted

    $sql = "INSERT INTO Songs
                (name, artist, genre, album, typeName, price) 
            VALUES
                (:name, :artist, :genre, :album, :typeName, :price)";
    $np = array();
    $np[':name'] = $_GET['name'];
    $np[':artist'] = $_GET['artist'];
    $np[':genre'] = $_GET['genre'];
    $np[':album'] = $_GET['album'];
    $np[':typeName'] = $_GET['typeName'];
    $np[':price'] = $_GET['price'];
    
    $stmt=$conn->prepare($sql);
    $stmt->execute($np);
    
    echo "Song was added!";
}


?>




<!DOCTYPE html>
<html>
    <head>
        <title>Admin: Add new song</title>
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


       <h1> Adding New Song </h1>
        
        <form method="GET">
            Song Name:<input type="text" name="name" />
            <br />
            Artist's Name:<input type="text" name="artist"/>
            <br/>
            Genre: <input type= "text" name ="genre"/>
            <br/>
            Album: <input type= "text" name ="album"/>
            <br/>
            Type: <input type= "text" name ="typeName"/>
            <br/>
            Price: <input type= "number" name ="price" step="0.01"/>
            <br/>
                
                
            </select>
            <input type="submit" value="Add Song" name="addSong">
            
             <br/> <br/>
            
            Songs In Catalog:
            
             <br/>
            
            <?php
                
                $departments = songList();
                
                foreach($departments as $department) {
                   echo "<option value='".$department['id']."'> " . $department['name']  . "</option>";  
                }
                
                
                ?>
        </form>

    </body>
</html>