<?php

 $cards = array("ace","one", 2);
 //print_r($cards); //for debugging purposes, shows all elements in array

 //echo $cards[0];
 
 $cards[] = "jack"; //adds new element at the end of the array
 array_push($cards, "queen", "king");
 
 $cards[2] = "ten";

 //print_r($cards); 
 
 print_r($cards);
 echo "<hr>";
 $lastCard = array_pop($cards); //retrieves and REMOVE the last item in the array
 displayCard($lastCard);
 echo "<hr>";
 print_r($cards);
 
 function displayCard($card) {
     
    // global $cards; //using variable that is outside of the function
    // echo "<img src='img/cards/clubs/$cards[2].png' />";

    echo "<img src='img/clubs/$card.png' />";

 }
 

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>