<!DOCTYPE html>

    <title>Finish</title>

    <body background="images/singer-250933.jpg">
    <head>
        <h1>Your Order</h1>
        <style>
           @import url("css/finish.css");
        </style>
    </head>
    


    <script language="javascript">
        
        var cost=0;
        
        
        //get method
        // var $_GET = {};
        // document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
        // function decode(s) {
        // return decodeURIComponent(s.split("+").join(" "));
        // }
        //     $_GET[decode(arguments[1])] = decode(arguments[2]);
        // });
        // You can now access the $_GET variables like so:
        // alert($_GET['some_variable']);
        
        
        var food=$("#main").val(); //get the food 
        var drinks=$("#drinks").val();
        var side=$("#side").val();
        var sauce=$("#sauce").val();
        if(food=="Burrito" || food=="Tortas")
        {
            cost=cost+4.99;
        }
        else if(food="3Tacos")
        {
            cost=cost+2.99;
        }
        
        if(drinks=="Tamarindo"||drinks=="Horchata" || drinks=="CokeBottle" || drinks=="Jamaica")
        {
            $cost+=1.50;
        }
        if (side=="Rice"||side=="Beans"||side=="Veggies")
        {
            $cost=$cost+1.50;
        }
        if (sauce=="Red"||sauce=="Green"||sauce=="Mild")
        {
            $cost=$cost+0.99;
        }
    
        
        
    </script>
    <?php
    // $cost=0;
    // if($_GET['main']=="Burrito" || $_GET['main']=="Tortas")
    // {
    //     $cost=$cost+4.99;
    // }
    // else if ($_GET['main']=="3Tacos")
    // {
    //     $cost=$cost+2.99;
    // }
    // if($_GET['drinks']=="Tamarindo"||$_GET['drinks']=="Horchata" || $_GET['drinks']=="CokeBottle" || $_GET['drinks']=="Jamaica")
    // {
    //     $cost+=1.50;
    // }
    // if ($_GET['side']=="Rice"||$_GET['side']=="Beans"||$_GET['side']=="Veggies")
    // {
    //     $cost=$cost+1.50;
    // }
    // if ($_GET['sauce']=="Red"||$_GET['sauce']=="Green"||$_GET['sauce']=="Mild")
    // {
    //     $cost=$cost+0.99;
    // }
    
    ?>
    
    <p>
        Hello <script language="javascript">document.write($("#name"));</script><br> <br> <br> <br>
        
        
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