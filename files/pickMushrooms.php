<?php
  
function pickMushrooms(){
	global $location, $has_mushrooms; 
	//only available in woods
	if($location !== "woods"){
		echo "There aren't any mushrooms to pick here!\n"; 
	}else{
		echo "You've picked some mushrooms.\n"; 
		$has_mushrooms === TRUE; 
	}
}  