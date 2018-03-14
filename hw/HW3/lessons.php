<!DOCTYPE html>
<html>
    <title>Guitar Shop</title>
    <body background = "images/guitarshop.jpg">
        <head>
            <nav>
            <a href = "index.php">Home</a>
            <a href = "6string.php">6 string guitars</a>
            <a href = "12string.php">12 string guitars</a>
            <a href = "lessons.php">Lessons</a>
            <a href = "repair.php">Repairs</a>
        </nav>
            <h1>Guitar Lessons</h1>
            <style>
                @import url("css/styles.css");

            </style>
        </head>
        
            <p>Our private lessons are sold in 1/2-hour increments. 
            The cost is $40* for each 1/2-hour ticket or $140 for four 1/2-hour 
            tickets. Tickets should be purchased ahead of time, and then handed 
            to your teacher at the beginning of each lesson. McCabe's lesson tickets 
            are valid for six months. All scheduling is done directly with each teacher. 
            Contact info can be found on this page, or by calling the shop. There is a 
            strict 24-hour cancellation policy. If you cancel a lesson less than 24 hours 
            in advance (or don't show up at all), your teacher is entitled to the ticket(s) 
            required to cover the lesson time.</p>
            
            <p>Please log in if you are already a member. If not create a new profile!</p>
            
            <?php
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
    <form action="lessonorder.php" method="get">
        <input type="submit" value="New Customer" name="newCustomer"/>
    </form>
            
            <br /> <br />
    </body>
</html>