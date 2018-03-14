<!DOCTYPE html>
<body background = "images/guitarshop.jpg">
    
    <title>Order</title>
    
    <head> 
    <h1>Order</h1>
        <style>
           @import url("css/styles.css");
         
        </style>
    </head>
    

<p>Please enter your choices along with your phone number and your name. 
Press submit to finish order. All orders will take a week to process and two to be deliver.</p>

<?php


?>

    <h3>Guitars</h3>
    <form action="finish.php" method="get">
        
        <div class="dropdown style">
        <select id="selectype" name="type">
        <option value = "">Select</option>
        <option value="full">Dreadnought</option>
        <option value="cut">Cut Away</option>
        </select>
        
        
        </br> 
        
        <select id="selectype" name="brand">
        <option value="">Select</option>
        <option value="taylor">Taylor</option>
        <option value="takamine">Takamine</option>
        <option value="gibson">Gibson</option>
        <option value="martin">Martin</option>
        <option value="ibanez">Ibanez</option>
        <option value="fender">Fender</option>
        </select>
        
        </br> 
        <fieldset>
            <legend>Select your type of guitar</legend>
        <input type="radio" name="strings" value="6string"> 6 string<br>
        <input type="radio" name="strings" value="12string"> 12 string<br>
        </fieldset>
        
        <select id="selectype" name="stringtype">
        <option value="">Select</option>
        <option value="Nylon">Nylon</option>
        <option value="Steel">Steel</option>
        </select>
        
        <div/>
        
        
        </br> 

        Phone Number:<input type="text" name="phone-number" />
        </br> 
        </br> 
        Name: <input type="text" name="name"/>
        </br> 
        </br> 
        <input type="submit" value="submit" />
    </form>
</body>

</html>