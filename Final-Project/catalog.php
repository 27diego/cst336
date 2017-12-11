<?php
session_start();
include 'database.php';
$conn = getDatabaseConnection();

function getGenres() {
    global $conn;
    $sql = "SELECT * 
            FROM Genres";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $classes = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($classes as $cl) {
      echo "<option value='" . $cl['typeName'] . "'>" . $cl['typeName'] . "</option>";
    }
}


//  function songList(){
      
//         global $conn;
        
//         //$sql = 
//         $stmt = $conn->prepare($sql);
//         $stmt->execute();
//         $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
//         //return $records;
        
//         foreach($records as $department) 
//         {
//           echo "<option value='".$department['id']."'> " . $department['name']  . "</option>";  
//         }
                
            
//     }


function getSongs() {
    global $conn;
    $namedParameters = array();
    
    $sql = "SELECT * FROM Songs 
            WHERE 1";
            
    if(isset($_GET['submit'])) {
        if (isset($_GET['storeSearch'])) {
            $sql .= " AND name LIKE :name";
            $namedParameters[':name'] = "%" . $_GET['storeSearch'] . "%";
        }
        if (isset($_GET['typeType'])) {
            $sql .= " AND typeName = :typeName ";
            $namedParameters[':typeName'] = $_GET['typeType'];
        }

        if ($_GET['sort'] == 'desc') {
            $sql .= " ORDER BY name desc";
        }
        if ($_GET['sort'] == 'asc') {
            $sql .= " ORDER BY name asc";
        }
    }
            
    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($records as $r) {
        echo "<div class='pharmacy'>";
        echo    "<details>";
        echo        "<summary>" . $r['name'] . "</summary>";
        echo        "<p> Category: " . $r['name'] . "</p>";
        echo        "<form action='addToCart.php' method='GET'>";
        echo            "<input type='hidden' name='val' value='".$r['name']."'>";
        echo            "<input type='submit' value='Add to cart' style='position:relative; top:-10px'>";
        echo        "</form>";
        echo    "</details>";
        echo "</div>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Single Store</title>
        <h>WELCOME TO THE Singles Store</h>
        <p>These are all the singles we currently have in vinyl</p>
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
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <!--<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"><!--<link href="https://fonts.googleapis.com/css?family=Cuprum:400i" rel="stylesheet">-->-->
    </head>
    <body>
        <h1>Items List</h1>
        <a href="checkout.php">Shopping Cart</a>
        <form>
            <fieldset style='border-radius:35px;
                             width:300px;
                             margin: 0 auto;'>
            <input type="text" name="storeSearch" placeholder="Search Product">
            <select name="typeType">
                <option disabled selected value value>Choose a type</option>
                <?=getGenres()?>
            </select></br>

            Sort Products By:</br>

            <!--<input type="radio" name="sort" value="desc" > Descending </br>-->
            <!--<input type="radio" name="sort" value="asc" checked> Ascending </br></br>-->
            <input type="submit" name="submit" value="Search!">
            </fieldset>        
        </form>
        <?=getSongs()?>
    </body>
</html>