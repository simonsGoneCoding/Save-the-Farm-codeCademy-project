<?php
  // Change player location
function cookSoup(){	
  global $location, $has_mushrooms, $has_soup;
  //only in kitchen and with mushrooms; 
  if(!($location === "kitchen" && $has_mushrooms)){
    echo "You can't cook like this! You need something to cook AND to be in the kitchen.\n"; 
  }else{
    echo "You made some mushroom soup. Mushroom is the queen of all soups!\n"; 
    $has_soup = !$has_soup;
    $has_mushrooms = !$has_mushrooms;
  }
}