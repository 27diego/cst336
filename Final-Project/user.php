<!DOCTYPE html>
 <head>
        <title>Admin Main Page </title>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        
       <style>
            body {
                text-align: center;
                background-color: #002351;
                font-family: 'Lobster';
                color:#ffffff;
                font-size: 100%;
                background-image:url('img/guitar.jpg');
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
            }
        </style>
    
</head>

<h1>Welcome to Our Store!</h1>

<div id="introducion">
    <p>We have everything you need for any do-it-yourself jobs including indoor 
    design to our door decorating and the tools you need to get the job done.
    </p>
</div>

<?php 
echo "<img src = 'img/Building-a-Fence.jpg' width=500px />";
?>



    <p>Visit our catalog!</p>
    
    <form action="catalog.php">
        <input type="submit"  class="btn btn-danger"value="Catalog" />
        
                
    </form>
    
    <p>Log in as User</p>
    <form action="userLogin.html">
                <input type="submit" class="btn btn-danger" value="User Login"/>
            </form>

    <p>Log in as Admin</p>
    <form action="login.php">
        <input type="submit" class="btn btn-danger" value="Admin" />
        
                
    </form>
    
</html>