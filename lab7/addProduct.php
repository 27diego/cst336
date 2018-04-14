<?php
session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}
include "dbConnection.php";
$conn = getDatabaseConnection("ottermart");

function getCategories() {
    global $conn;
    
    $sql = "SELECT catId, catName from category ORDER BY catName";
    
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='".$record["catId"] ."'>". $record['catName'] ." </option>";
    }
}

if (isset($_GET['submitProduct'])) {
    $productName = $_GET['productName'];
    $productDescription = $_GET['description'];
    $productImage = $_GET['productImage'];
    $productPrice = $_GET['price'];
    $catId = $_GET['catId'];
    
    $sql = "INSERT INTO product
            ( `productName`, `productDescription`, `productImage`, `price`, `catId`) 
             VALUES ( :productName, :productDescription, :productImage, :price, :catId)";
    
    $namedParameters = array();
    $namedParameters[':productName'] = $productName;
    $namedParameters[':productDescription'] = $productDescription;
    $namedParameters[':productImage'] = $productImage;
    $namedParameters[':price'] = $productPrice;
    $namedParameters[':catId'] = $catId;
     $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Add a product </title>
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
        <h1> Add a product</h1>
        <form>
            <a href = "admin.php">BACK</a>
            </br>
            </br>
            </br>
            Product name: <input type="text" name="productName"><br>
            Description: <textarea name="description" cols = 50 rows = 4></textarea><br>
            Price: <input type="text" name="price"><br>
            Category: <select name="catId">
                <option value="">Select One</option>
                <?php getCategories(); ?>
            </select> <br />
            Set Image Url: <input type = "text" name = "productImage"><br>
            <input type="submit" name="submitProduct" value="Add Product">
            
        </form>
    </body>
</html>