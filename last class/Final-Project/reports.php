<!DOCTYPE html>

<head>
    
    <title>Reports</title>
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
<body
    <h1>View Reports</h1>
    
    </br>
    </br>
    </br>
    </br>

</body>

</html>


<?php

    include 'database.php';



function getAveragePrice($conn) 
{
    $sql="SELECT AVG(price)
    FROM Songs";    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $rows = $stmt->fetchAll();
    $keys = array_keys($rows[0]);
    
    // foreach ($keys as $name) {
    //     echo $name . " ";
    // }
    // echo "<br/>";
    foreach ($rows as $row) {
        foreach($row as $attribute) {
            echo $attribute . " ";
        }
        echo "<br/>";
    }
    echo "<br/>";
}


function numberOfAlbums($conn) 
{
    $sql="SELECT COUNT(name)
        FROM Songs;";    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $rows = $stmt->fetchAll();
    $keys = array_keys($rows[0]);
    
    // foreach ($keys as $name) {
    //     echo $name . " ";
    // }
    // echo "<br/>";
    foreach ($rows as $row) {
        foreach($row as $attribute) {
            echo $attribute . " ";
        }
        echo "<br/>";
    }
    echo "<br/>";
}

function totalCost($conn) 
{
    $sql="SELECT SUM(price) AS overallSize FROM Songs;";    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $rows = $stmt->fetchAll();
    $keys = array_keys($rows[0]);
    
    // foreach ($keys as $name) {
    //     echo $name . " ";
    // }
    //echo "<br/>";
    foreach ($rows as $row) {
        foreach($row as $attribute) {
            echo $attribute . " ";
        }
        echo "<br/>";
    }
    echo "<br/>";
}


$conn = getDatabaseConnection();


echo "Average Price of Songs";
getAveragePrice($conn);

echo "Number of Albums: ";
numberOfAlbums($conn);

echo "Total Cost of vinyls: $";
totalCost($conn);



?>
 