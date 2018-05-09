
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
            FROM admin
            WHERE adminId = ".$_GET['adminId'];;
            
            $stmt = $conn->prepare($sql);
            $stmt->execute($namedParameters);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
           // print_r($record);
            
            return $record;
    
}
function departmentList(){
      
        global $conn;
        
        $sql = "SELECT * FROM Departments ORDER BY name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $records;
    }
if(isset($_GET['updateUser']))
{
    //echo "Form has been submitted";
    
    $sql="UPDATE admin 
        SET firstName = :fName,
        SET lastName = :lName
        WHERE productId = :productId";
        
    $np = array();
        
    $np[':fName'] = $_GET['firstName'];
    $np[':lName'] = $_GET['lastName'];
    $np[':productId'] = $_GET['productId'];
    
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np); //finish
    
    echo "Record has been updated.";
}
if(isset($_GET['productId']))
{
    $userInfo = getUserInfo();
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
    <h1>Update User</h1>
    
      <h1> Tech Checkout System: Updating User's Info </h1>
        <form method="GET">
             <input type="hidden" name="userId" value="<?=$userInfo['productId']?>" />
            <br />
            First Name:<input type="text" name="firstName" value="<?=$userInfo['firstName']?>" />
            <br />
            Last Name:<input type="text" name="lastName" value="<?=$userInfo['lastName']?>"/>
            <br />
            
            <?php
            
            $departments = departmentList();
            
            foreach($departments as $department) {
               echo "<option value='".$department['productId']."'> " . $department['prouctName']  . "</option>";  
            }
            
            
            ?>
                
            </select>
            <input type="submit" value="Update User" name="updateUser">
        </form>
</body>

</html>