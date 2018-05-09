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
            FROM product
            WHERE productId = ".$_GET['productId'];;
            
            $stmt = $conn->prepare($sql);
            $stmt->execute($namedParameters);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            //print_r($record);
            

            return $record;
    
}
function departmentList(){
      
        global $conn;
        
        $sql = "SELECT * FROM admin ORDER BY productName";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $records;
    }
if(isset($_GET['updateProduct']))
{
    echo "Form has been submitted";
    
    $sql="UPDATE product 
        SET productName = :productName,
        SET productDescription = :productDescription,
        SET productImage = :productImage,
        SET price = :price,
        SET productType = :productType,
        WHERE productId = :productId";
    
    //  $sql="UPDATE product 
    //     SET productName = ".$_GET['productName'].",
    //     SET productDescription = ".$_GET['productDescription'].",
    //     SET productImage = ".$_GET['productImage'].",
    //     SET price = ".$_GET['price'].",
    //     SET productType = ".$_GET['productType'].",
    //     WHERE productId = ".$_GET['productId'];
        
    $np = array();
        
    $np[':productName'] = $_GET['productName'];
    $np[':productDescription'] = $_GET['productDescription'];
    $np[':productImage'] = $_GET['productImage'];
    $np[':productType'] = $_GET['productType'];
    $np[':price'] = $_GET['price'];
    $np[':productId'] = $_GET['productId'];
    
    
    $stmt = $conn->prepare($sql);
    // $stmt->execute($np); //finish
    $stmt->execute($np);
    
    // if ($conn->query($sql) === TRUE) {
    // echo "Record updated successfully";
    // }
    // else 
    // {
    //     echo "Error updating record: " . $conn->error;
    // }
}    

if(isset($_GET['productId']))
{
    $productInfo = getUserInfo();
    //echo "-------------------- function works";
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
    
      

      <h1> Tech Checkout System: Updating product Info </h1>
        <form method="GET">
             <input type="hidden" name="productId" value="<?=$productInfo['productId']?>" />
            <br />
            Product Name:<input type="text" name="productName" value="<?=$productInfo['productName']?>" />
            <br />
            Product Description:<input type="text" name="productDescription" value="<?=$productInfo['productDescription']?>"/>
            <br/>
            Product Image: <input type= "text" name ="productImage" value="<?=$productInfo['productImage']?>"/>
            <br/>
            Product Type: <input type= "text" name ="productType" value="<?=$productInfo['productType']?>"/>
            <br/>
            Price: <input type= "number" name ="price" value="<?=$productInfo['price']?>"/>
            <br/>
            
            <input type="submit" value="Update Product" name="updateProduct">
        </form>
        
        <form action="catalog.php">
             <input type="submit" value="Catalog" name="Catalog">
        </form>
</body>

</html>