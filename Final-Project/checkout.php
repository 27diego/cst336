
<?php
session_start();

function displayItems(){
    foreach($_SESSION['shoppingCart'] as $itemss){
        echo "<div>";
        echo $itemss."-";
        echo "<br>";
        echo "</div>";
    
    }
    
}
if(isset($_GET['Checkout'])){
        $_SESSION['shoppingCart'] = array();
        header("Location: catalog.php");
}

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Checkout Page </title>
        <style>
        body{
            font-family: 'Lobster', cursive;
            color: white;
            background-color: #000000;
            text-align:center;
        }
        div{
            background-color: white;
            text-align: center;
            width: 300px;
            border-style: solid;
            border-width: 5px;
            border-radius: 25px;
            margin: 0 auto;
            color: black;
            font-size: 1em;
        }
        h1{
            font-size: 400%;
        }
            
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
            <a href = "catalog.php" font-family='cursive'>BACK</a>
            <h1>Checkout Items</h1>
            <span id="showUser">
                
            </span>
            <?=displayItems()?>
        <form method='GET'>
            <input type="submit" name = "Checkout" value ="Checkout">
        </form>
        <p>Thank you <?php echo $_SESSION['varname']['username']; ?> for shopping with us, we will email you at <?php echo $_SESSION['varname']['email']; ?> when your order has been reserved and ready for pick up.</p>
    </body>
</html>