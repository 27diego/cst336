<?php
    
    include 'database.php';
    $conn = getDatabaseConnection();
    
    $sql = "DELETE FROM product
            WHERE productId = " .$_GET['productId'];
            
            $stmt = $conn -> prepare($sql);
            $stmt->execute();
            
            header("Location: adminPage.php");

?>