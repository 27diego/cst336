<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style>
        @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id = "main">
        <?php
        play();
        ?>
        
        <form>
           <input type = "submit" value="Spin!"/> 
        </form>
        
        </div>
        
    </body>    
        <?php
        
        
        // $randomValue1=rand(0,2);
        // displaySymbol($randomValue1);
        // $randomValue2=rand(0,2);
        // displaySymbol($randomValue2);
        // $randomValue3=rand(0,2);
        // displaySymbol($randomValue3);
        
        
       function displaySymbol($randomValue, $pos)
        {
            switch($randomValue)
            {
                case 0:$symbol = "seven";
                break;
                case 1:$symbol = "cherry";
                break;
                case 2:$symbol = "lemon";
                break;
            }
            echo "<img id = 'reel$pos' src = 'img/$symbol.png' alt='x$symbol' title = '". ucfirst($symbol) ."' width = '70' />";
            
        }
        
       
        
         function displayPoints($randomValue1,$randomValue2,$randomValue3)
        {
            
            echo"<div id= 'output'>";
            if($randomValue1==$randomValue2 && $randomValue2==$randomValue3)
            {
                switch($randomValue1)
                {
                    case 0: $totalPoints = 1000;
                        echo"<h1>Jackpot!</h1>";
                        echo"1000 points";
                        break;
                    case 1: $totalPoints = 500;
                        echo"500 points";
                        break;
                    case 2: $totalPoints = 250;
                        echo"250 points";
                        break;
                }
                
                echo "<h2 You won $totalPoints points!<h2>";
            }
            else
                {
                    echo "<h3>Try Again! </h3>";
                }
                echo"</div>";
        }
        

        function play()
        {
            for($i=1; $i<4; $i++)
            {
                ${"randomValue" . $i } = rand(0,2);
               displaySymbol(${"randomValue" . $i},$i);
            }
             displayPoints($randomValue1,$randomValue2,$randomValue3);
        }
        ?>
                
                
        <div id="info">
            <hr>
             CST 336. 2018&copy; Diego Vega <br />
            <strong>Disclaimer:</strong>
           This webpage is used for academic purposes only.
           </div>
           
           
           <a><img src="logo.jpg" /></a>
            <style type="text/css"> /*Initializing CSS code*/
        img {
            position: absolute;
            right: -20px;
            bottom: 0px;
            max-width:30%;
            max-height:30%;
        }
</style>
            

    </div>

    
</html>