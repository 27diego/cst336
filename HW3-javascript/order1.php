<!DOCTYPE html>
<body background="images/tacos-2128212.jpg">
    
    <title>Order</title>
    
    <head> 
    <h1>Order</h1>
        <style>
           @import url("css/order.css");
        </style>
    </head>
    
    

<h1>Drinks</h1>

<ul>
  <li>Tamarindo Water, 0.99$</li>
  <li>Horchata Water, 0.99$</li>
  <li>Jamaica Water, 0.99$</li>
  <li>Coke Bottle, 0.99$</li>
</ul>

</br>
<footer>
        <hr>
        </footer>
</br>

<h1>Main (With Meat)</h1>
<ul>
  <li>Burritos, 4.99$</li>
  <li>Tortas, 4.99$</li>
  <li>3 Tacos, 2.99$</li>
</ul>

<p>With the meat choices of Asada (Beef), Pastor (Pork), or Pollo (Chicken)</p>

</br>
</br>
<footer>
        <hr>
        </footer>
</br>
</br>

<h1>Side</h1>
<ul>
  <li>Rice, 1.50$</li>
  <li>Beans, 1.50$</li>
  <li>Veggies, 1.50$</li>
</ul>

</br>
</br>
<footer>
        <hr>
        </footer>
</br>
</br> 


<h1>Sauces</h1>
<ul>
  <li>Green (Spicy), 0.99$</li>
  <li>Red (Medium), 0.99$</li>
  <li>Mild, 0.99$</li>
</ul>

</br>
</br>
<footer>
        <hr>
        </footer>
</br>
</br> 

<p>Please enter your choices along with your phone number and your name. Press submit to finish order:</p>

<?php


?>

    <form action="finish.php" method="get">
        
        <div class="dropdown style">
        <select id="selectype" name="drinks">
        <option value="Horchata">Horchata</option>
        <option value="Tamarindo">Tamarindo</option>
        <option value="Jamaica">Jamaica</option>
        <option value="CokeBottle">Coke Bottle</option>
        </select>
        
        
        </br> 
        
        <select id="selectype" name="main">
        <option value="Burrito">Burrito</option>
        <option value="Tortas">Tortas</option>
        <option value="3Tacos">3Tacos</option>
        </select>
        
        </br> 
        
        <select id="selectype" name="meat">
        <option value="Asada">Asada (Beef)</option>
        <option value="Pastor">Pastor (Pork)</option>
        <option value="Pollo">Pollo (Chicken)</option>
        </select>
        
        </br> 
    
        <select id="selectype" name="sauce">
        <option value="Green">Green (Spicy)</option>
        <option value="Red">Red (Medium)</option>
        <option value="Mild">Mild</option>
        </select>
        
        </br> 
        
        
        <select id="selectype" name="side">
        <option value="Rice">Rice</option>
        <option value="Beans">Beans</option>
        <option value="Veggies">Veggies</option>
        </select>
        </div>
        
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