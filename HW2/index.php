<!DOCTYPE html>
<html>
    <head>
        <title> Randomizer 3000 </title>
        <style>
        @import url("css/styles.css");
        </style>
    </head>
    <body>
        
        
    </body> 
        <header>
            <h1>Fortunes!</h1>
        </header>
            <br /> <br />
            
            <main>
                
                <div id="welcomeText">
                    <p>Hello!</p> <br />
                    <p>This is my fortune slides to give you the message of the day!</p>
                    <p>Remember, this is what you make it</p>
                    <p>Believe it or not</p>
                    
                </div>
                
                
            </main>
            
            <div id="date">
                <p>For today:</p>
            </div>
    
        <?php
        $date = date("l");
        echo "<h2>".$date."</h2>";
        echo "<br/>";
        echo "<br/>";
        
        //array to store quotes and value
        
    $array = array(
        1    => "<h1> something is coming in 9 months</h1>",
        2  => "<h1>the fortune you seek is in another slide</h1>",
        3  => "<h1>pick another fortune</h1>",
        4 => "<h1>Avoid taking unnecessary gambles</h1>",
        5 => "<h1>You will pass this class</h1>",
        6 => "<h1>your biggest hurdle is yourself</h1>",
        7 => "<h1>Just do it</h1>",
        8 => "<h1>A foolish man listens to his heart. A wise man listens to fortune cookies</h1>",
        9 => "<h1>You can always find happiness at class on Friday</h1>",
        10 => "<h1>Dont let statistics do a number on you</h1>",
        11 => "<h1>You will win your fantasy football league</h1>",
                    );
        //switch to store pictures and values
        
        $keys=array(1,2,3,4,5,6,7,8,9,10,11);
        
        function displayImage($key)
        {
        switch($key)
        {
            case 1:
               echo '<img src = "img/kanye yikes.gif" id="Languages"/>';
                break;
                
            case 2:
                echo '<img src = "img/next giff.gif" id="Languages"/>';
                break;
                
            case 3:
                echo '<img src = "img/next.gif" id="Languages"/>';
                break;
                
            case 4:
                echo '<img src = "img/agree.gif" id="Languages"/>';
                break;
                
            case 5:
                echo '<img src = "img/yes you can.gif" id="Languages"/>';
                break;
                
            case 6:
                echo '<img src = "img/hurdle.gif" id="Languages"/>';
                break;
                
            case 7:
                echo '<img src = "img/just do it.gif" id="Languages"/>';
                break;
                
            case 8:
                echo '<img src = "img/cookie monster.gif" id="Languages"/>';
                break;
                
            case 9:
                echo '<img src = "img/school.gif" id="Languages"/>';
                break;
                
            case 10:
                echo '<img src = "img/tired of papers.gif" id="Languages"/>';
                break;
                
            case 11:
                echo '<img src = "img/fantasy football.gif" id="Languages"/>';
                break;
        }
        }
        
        
        
        
        //print up quote with giff
        
        $condition = false;
        if(sizeof($array)!=sizeof($keys))
        {
            for($i=0;$i<=sizeof($keys);$i++)
            {
                if(array_key_exists($i,$array ))
                {
                    $condition = true;
                }
            }
        }
        if($condition == false)
        {
                $randomValue = rand(1,11);
                echo $array[$randomValue];
                echo "<br/>";
                echo "<br/>";
                for($j=0;$j<sizeof($array);$j++)
                {
                    if($randomValue == key($array))
                    {
                        displayImage($randomValue);
                    }
                }
                
               displayImage($randomValue);
        }
        
        ?>

    
</html>