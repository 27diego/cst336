<?php
include 'database.php';
$conn = getDatabaseConnection();

    function productList(){
      
        global $conn;
        
        $sql = "SELECT * FROM product";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $records;
    }


if (isset($_GET['addProduct'])) {  //the add form has been submitted

    $sql = "INSERT INTO product
                (productName, productDescription, productImage, price, productType) 
            VALUES
                (:productName, :productDescription, :productImage, :price, :productType)";
    $np = array();
    $np[':productName'] = $_GET['productName'];
    $np[':productDescription'] = $_GET['productDescription'];
    $np[':productImage'] = $_GET['productImage'];
    $np[':price'] = $_GET['price'];
    $np[':productType'] = $_GET['productType'];

    $stmt=$conn->prepare($sql);
    $stmt->execute($np);
    
    echo "Product was added!";
}


?>




<!DOCTYPE html>
<html>
    <head>
        <title>Admin: Add new song</title>
        <h2>DOES NOT INSERT</h2>
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
            Product Name:<input type="text" name="productName" />
            <br />
            Product Description:<input type="text" name="productDescription"/>
            <br/>
            Product Image: <input type= "text" name ="productImage"/>
            <br/>
            Price: <input type= "number" name ="price" step="0.01"/>
            <br/>
            Product Type: <input type= "texth" name ="productType"/>
            <br/>
                
                
            </select>
            <input type="submit" value="add Product" name="addProduct">
            </form>
            
             <br/> <br/>
            
            Products In Catalog:
            
             <br/>
            
            <?php
                
                $departments = productList();
                
                foreach($departments as $department) {
                   echo "<option value='".$department['productId']."'> " . $department['productName']  . "</option>";  
                }
                
                ?>
        

    </body>
</html>