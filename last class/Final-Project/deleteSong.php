<?php
    
    include 'database.php';
    $conn = getDatabaseConnection();
    
    $sql = "DELETE FROM Songs
            WHERE id = " .$_GET['userId'];
            
            $stmt = $conn -> prepare($sql);
            $stmt->execute();
            
            header("Location: adminPage.php");

?>