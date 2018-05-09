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
    $sql="SELECT ROUND(AVG(price))
    FROM product";    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $rows = $stmt->fetchAll();
    $keys = array_keys($rows[0]);
    
   
    foreach ($rows as $row) {
        foreach($row as $attribute) {
            echo $attribute . " ";
        }
        echo "$ <br/>";
    }
    echo "<br/>";
}


function numberOfAlbums($conn) 
{
    $sql="SELECT COUNT(*)
        FROM product;";    
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
    $sql="SELECT ROUND(SUM(price)) AS overallSize FROM product;";    
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
        echo "$<br/>";
    }
    echo "<br/>";
}


$conn = getDatabaseConnection();


echo "Average Price of product in stock: ";
getAveragePrice($conn);

echo "Number of products in store: ";
numberOfAlbums($conn);

echo "Total Cost of inventory: ";
totalCost($conn);


?>
 