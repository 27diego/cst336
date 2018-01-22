<!DOCTYPE html>
    <title>Diego's Taqueria</title>
    
    <body background="images/tacos-245241.jpg">
        <head>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <h1>Diego's Taqueria</h1>
            <style>
               @import url("css/index.css");
            </style>
        </head>
    
    <p>Hello! Welcome to my taqueria where we sell a small range of only the best Mexican food for your enjoyment.
    </br>
       We are devoted to serve only the best food that Mexico has to offer so please come eat with
       us.
       </br>
       Since we do have a lot of customers and are busy most of the time, we provide a place to order
       online so you wont have to wait too long for your food.
       </br>
        Please log in for a faster checkout if you are a returning customer.
    </p>

    
     <?php
//define variables and set to empty values
$nameErr = "";
$name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["username"])) {
        $nameErr = "Username is required";
      } else {
        $name = test_input($_POST["username"]);
      }
      
      if (empty($_POST["password"])) {
        $emailErr = "Password is required";
      } else {
        $email = test_input($_POST["password"]);
      }
      
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

<p><span class="error"></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="username">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="password">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

    
    <p>If you are a new customer please click here</p>
    <form action="order1.php" method="get">
        <input type="submit" value="New Customer" name="newCustomer"/>
    </form>
    
    <footer>
        <hr>
            <strong> Disclaimer:</strong> One order is restricted per new customer.
            
        </footer>
        
        
        
       
        

</body>
</html>