<?php
  // Change player location
function changeLocation(){	
  global $location; 
  
  //determine where the player wants to go
  echo "Where do you want to go?\n";
  $response = readline(">> "); 
  $response = strtolower($response);
  echo "\n"; 

  //logic for moving around
  if($location === "kitchen" && $response === "bathroom"){
    echo "You go to bathroom."; 
    $location = $response; 
  }elseif($location === "kitchen" && $response === "woods"){
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods."; 
    $location = $response;
  }elseif($location ==="bathroom" && $response === "kitchen"){
    echo "You go to kitchen."; 
    $location = $response;
  }elseif($location ==="woods" && $response === "kitchen"){
    echo "You go to kitchen."; 
    $location = $response;
  }elseif($response === "bathroom" || $response === "kitchen" || $response === "woods"){
    echo "You can't go directly to there from your current location. Try going somewhere else first.\n"; 
  }else{
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n"; 
  }
}