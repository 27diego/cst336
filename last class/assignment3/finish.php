<!DOCTYPE html>

    <title>Finish</title>

    <body background="images/singer-250933.jpg">
    <head>
        <h1>Your Order</h1>
        <style>
           @import url("css/finish.css");
        </style>
    </head>
    
    <?php
    $cost=0;
    if($_GET['main']=="Burrito" || $_GET['main']=="Tortas")
    {
        $cost=$cost+4.99;
    }
    else if ($_GET['main']=="3Tacos")
    {
        $cost=$cost+2.99;
    }
    if($_GET['drinks']=="Tamarindo"||$_GET['drinks']=="Horchata" || $_GET['drinks']=="CokeBottle" || $_GET['drinks']=="Jamaica")
    {
        $cost+=1.50;
    }
    if ($_GET['side']=="Rice"||$_GET['side']=="Beans"||$_GET['side']=="Veggies")
    {
        $cost=$cost+1.50;
    }
    if ($_GET['sauce']=="Red"||$_GET['sauce']=="Green"||$_GET['sauce']=="Mild")
    {
        $cost=$cost+0.99;
    }
    
    ?>
    
    <p>
        Hello <?php echo $_GET['name']; ?>!<br>
        Your number is <?php echo $_GET['phone-number']; ?> <br>
        You Ordered <?php echo $_GET['main']; ?> with <?php echo $_GET['meat']; ?> meat<br>
        and a Side of <?php echo $_GET['side']; ?><br>
        with <?php echo $_GET['sauce']; ?> sauce.
        With <?php echo $_GET['drinks']; ?>. <br>
        Your total will be <?php echo $cost; ?>$ <br>
        Stop by in 30 mins. to pick up your food!
    </p>
 
 
 </body>

</html>