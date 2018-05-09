<?php
session_start();
include 'database.php';
$conn = getDatabaseConnection();

function getTypes() {
    global $conn;
    $sql = "SELECT DISTINCT productType
            FROM product";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $classes = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($classes as $cl) {
      echo "<option value='" . $cl['productType'] . "'>" . $cl['productType'] . "</option>";
    }
}


function getProducts() {
    global $conn;
    $namedParameters = array();
    
    $sql = "SELECT * FROM product 
            WHERE 1";
            
    if(isset($_GET['submit'])) {
        if (isset($_GET['storeSearch'])) {
            $sql .= " AND productName LIKE :productName";
            $namedParameters[':productName'] = "%" . $_GET['storeSearch'] . "%";
        }
        if (isset($_GET['typeType'])) {
            $sql .= " AND productType = :productType ";
            $namedParameters[':productType'] = $_GET['typeType'];
        }

        if ($_GET['sort'] == 'desc') {
            $sql .= " ORDER BY productName desc";
        }
        if ($_GET['sort'] == 'asc') {
            $sql .= " ORDER BY productName asc";
        }
    }
            
    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
   // $_SESSION['allinfo'] = $records;
    
    foreach($records as $r) {
        echo "<div class='store'>";
        echo    "<details>";
        echo        "<summary>" . $r['productName'] . "</summary>";
        echo        "<p> Description: " . $r['productDescription'] . "</p>";
        echo        "<p>" .'<img src='.$r['productImage'].' width = 200px>' . "</p>";
        echo        "<form action='addToCart.php' method='GET'>";
        echo            "<input type='hidden' name='val' value='".$r['productName']."'>";
        echo            "<input type='hidden' name='val2' value='".$r['price']."'>";
        echo            "<input type='submit' value='Add to cart' style='position:relative; top:-10px'>";
        echo        "</form>";
        echo    "</details>";
        echo "</div>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        
        <title>Store</title>
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
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <!--<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"><!--<link href="https://fonts.googleapis.com/css?family=Cuprum:400i" rel="stylesheet">-->
    </head>
    <body>
        <h1>Items List</h1>
        <a href="checkout.php">Shopping Cart</a>
        <form>
            <fieldset style='border-radius:35px;
                             width:300px;
                             margin: 0 auto;'>
            <input type="text" name="storeSearch" placeholder="Search Product">
            <select name="typeType">
                <option disabled selected value value class="btn btn-danger">Choose a type</option>
                <?=getTypes()?>
            </select></br>

            Sort Products By:</br>

            <input type="radio" name="sort" value="desc" > Descending </br>
            <input type="radio" name="sort" value="asc" checked> Ascending </br></br>
            <input type="submit" name="submit" value="Search!">
            </fieldset>        
        </form>
        <?=getProducts()?>
    </body>
</html>