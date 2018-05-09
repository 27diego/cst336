<?php
    
    include 'database.php';
    $conn = getDatabaseConnection();
    
    $sql = "DELETE FROM admin
            WHERE adminId = " .$_GET['adminId'];
            
            $stmt = $conn -> prepare($sql);
            $stmt->execute();
            
            header("Location: adminPage.php");
?>