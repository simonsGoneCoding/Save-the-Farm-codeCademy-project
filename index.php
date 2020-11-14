<?php 
    // Global Variable Initialization
$rounds_left = 25;
$location = "kitchen";
$wearing_glasses = TRUE;
$wearing_contacts = FALSE;
$has_mushrooms = FALSE;
$has_soup = FALSE;
$moved_cupboard = FALSE;
$is_hungry = TRUE;
$needs_to_pee = TRUE;

// Include each of the function definitions

include "files/printHelp.php";
include "files/gameRound.php";

include "files/printStatus.php";
include "files/changeLocation.php";
include "files/lookAround.php";

include "files/pickMushrooms.php";
include "files/cookSoup.php";
include "files/eatSoup.php";

include "files/pee.php";

include "files/moveCupboard.php";
include "files/searchSafe.php";


//Display Intro Text
printHelp();
echo "\nOk, the game is about to begin. Will you be able to find the golden mouse statuette and save your great-aunt's farm? We wish you good luck!\n**********BEGIN GAME***********\n";

echo "\nHello there. It's been a harrowing few weeks. First your toenail issue, and now Great-Aunt Natasha's emu farm is in danger of being reposessed! So here you are---after a brief stopover at the Mayo clinic---in uncle Boris's remote cabin in the heart of the Terror Woods. Family legend holds that a golden statue of immense value is hidden somewhere within these walls. Unfortunately, you have a lot of stuff to do today, so you can only devote about 25 minutes to finding the statue. I guess we'll see what happens ;) \n\n";

echo "grzyby : $has_mushroom";
// Play 25 rounds
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();


// Game Is Over
echo "\n**********ATTENTION***********\n The game is over!" ;