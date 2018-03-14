<!DOCTYPE html>

    <title>Confirmation</title>

    <body background = "images/guitarshop.jpg">
    <head>
        <nav>
            <a href = "index.php">Home</a>
            <a href = "6string.php">6 string guitars</a>
            <a href = "12string.php">12 string guitars</a>
            <a href = "lessons.php">Lessons</a>
            <a href = "repair.php">Repairs</a>
        </nav>
        <h1>Lesson Confirmation</h1>
        <style>
           @import url("css/styles.css");

        </style>
    </head>
    
    <?php
    $cost=0;
    //Martin, Takamine, Taylor, Fender, Gibson, Ibanez
    
    
    ?>
    
    <p>
        Thank you for your order <?php echo $_GET['lname']; ?>!<br>
        Your number is <?php echo $_GET['lphone-number']; ?> <br>
        Since lesson slots are very limited, we will send you an email with 
        current open slots to <?php echo $_GET['lemail']; ?><br>
        Please look out for that email.
    </p>
    <!--get string type-->
    <!--get body type -->
    <!--get brand-->
    
   
 
 </body>

</html>