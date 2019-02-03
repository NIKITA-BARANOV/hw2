<?php

echo "what do you do?\n \nif you php developer, pls press 5\n 
else just press any number";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo ($input == 5) ? "Hey, colleague!" : "Okkey, bro"; 

echo "\n";