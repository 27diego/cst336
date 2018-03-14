<!DOCTYPE html>
<body background = "images/guitarshop.jpg">
    
    <title>Lessons</title>
    
    <head> 
    <h1>Order</h1>
        <style>
           @import url("css/styles.css");

        </style>
    </head>
    
    


<p>Please enter your name, phone number and the number of lessons and type of lessons you want. Press submit to finish order:</p>

<?php


?>

    <form action="lessonfinish.php" method="get">
        
        <div class="dropdown style">
        <select id="selectype" name="lessons">
        <option value="">select</option>
        <option value="Requinto">Requinto</option>
        <option value="Classical">Classical</option>
        <option value="Ranchero">Ranchero</option>
        <option value="Rock">Rock</option>
        </select>
        
        
        </br> 
        
        <select id="selectype" name="number">
        <option value="">select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select>
        </div>
        
        </br> 

        Phone Number:<input type="text" name="lphone-number" />
        </br> 
        </br> 
        Name: <input type="text" name="lname"/>
        </br> 
        </br> 
        email: <input type="email" name="lemail"/>
        </br> 
        </br> 
        <input type="submit" value="submit" />
    </form>
</body>

</html>