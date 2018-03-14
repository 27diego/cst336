<!DOCTYPE html>

    <title>Finish</title>

    <body background = "images/guitarshop.jpg">
    <head>
        <nav>
            <a href = "index.php">Home</a>
            <a href = "6string.php">6 string guitars</a>
            <a href = "12string.php">12 string guitars</a>
            <a href = "lessons.php">Lessons</a>
            <a href = "repair.php">Repairs</a>
        </nav>
        <h1>Your Order</h1>
        <style>
           @import url("css/styles.css");
        </style>
    </head>
    
    <?php
    $cost=0;
    //Martin, Takamine, Taylor, Fender, Gibson, Ibanez
    
    switch($_GET['brand']){
        case "martin":
            $cost = 1200;
        case "takamine":
            $cost = 1399;
        case "taylor":
            $cost = 1100;
        case "fender":
            $cost = 899;
        case "gibson":
            $cost = 900;
        case "ibanez":
            $cost = 1200;
    }
    
    ?>
    
    
    
    <?php
        $name = $_GET["brand"];
        $type = $_GET["type"];
        $strings=$_GET["strings"];
        $pathname="images/".$name.$type.$strings.".jpg";
        
    
    print"<img src=\"$pathname\" width=\"400px\"\/>";
    ?>
    
    <div id="finishorder">
    <p>
        <br/>
        <br/>
        <br/>
        <br/>
        
        
        Thank you for your order <?php echo $_GET['name']; ?>!<br>
        Your number is <?php echo $_GET['phone-number']; ?> <br>
        You Ordered <?php echo $_GET['brand']; ?> with a body type of <?php echo $_GET['type']; ?><br>
        and a guitar type of <?php echo $_GET['strings']; ?> with <?php echo $_GET['stringtype'];?> strings<br>
        Your total will be $<?php echo $cost; ?> <br>
        You will have your product in two weeks!
    </p>
    </div>
    <!--get string type-->
    <!--get body type -->
    <!--get brand-->
    
   
 
 </body>

</html>