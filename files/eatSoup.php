<?php
function eatSoup(){
	global $has_soup, $is_hungry; 

	if(!$has_soup){
		echo "You don't have any cooked food to eat!\n"; 
	}else{
		echo "You have eaten the soup!\n";
		$has_soup = !$has_soup; 
		$is_hungry = !$is_hungry; 
	}
}