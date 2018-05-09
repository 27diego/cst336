<?php

include 'database.php';
$conn = getDatabaseConnection();


session_start();
if (!isset($_SESSION['adminName'])) {  //checks whether the admin is logged in
    header("Location: login.php");
}
function productList(){
  global $conn;
  
  $sql = "SELECT *
          FROM product";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
  return $records;
}

function adminList(){
  global $conn;
  
  $sql = "SELECT *
          FROM admin";
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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
       
        
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
            <form action="addProduct.php">
                
                <input type="submit"  class="btn btn-danger" value="Add new Product" />
                
            </form>
            <br />
            
            
             <div id="addAdminButton">
            <form action="addAdmin.php">
                
                <input type="submit"  class="btn btn-danger" value="Add new Admin" />
                
            </form>
            <br />
            
            
            
             <form action="logout.php">
                
                <input type="submit"  class="btn btn-danger" value="Log out" />
                
            </form>
            <br />
            
             <form action="reports.php">
                
                <input type="submit"  class="btn btn-danger" value="View Reports" />
                
            </form>
            </div>
            
            <?php 
            
              $products = productList();
              $admin = adminList();
            echo"<h2>Products</h2>";
             foreach($products as $product)
             {
                 echo "ID: ". $product['productId'] . " Name: " . $product['productName'] . " Type: " . $product['productType'];
                 
                 echo"[<a href = 'updateProduct.php? productId=".$product['productId']."'> Update</a>]";
                 echo"[<a onclick='return confirmDelete()' href = 'deleteProduct.php? productId=".$product['productId']."'> Delete</a>] <br />";
                 echo"<br />";
             }
             
             
             echo"<h2>Admin Users</h2>";
             foreach($admin as $admins)
             {
                 echo "ID: ". $admins['adminId'] . " Name: " . $admins['firstName'];
                 
                 echo"[<a href = 'adminUpdate.php? adminId=".$admins['adminId']."'> Update</a>]";
                 echo"[<a onclick='return confirmDelete()' href = 'adminDelete.php? adminId=".$admins['adminId']."'> Delete</a>] <br />";
                 echo"<br />";
             }
                
                
               
             ?>
            
    </body>
</html>