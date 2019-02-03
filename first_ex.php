<?php

echo "Pls say me you age?\n";
$handle = fopen ("php://stdin","r");
$age = fgets($handle);

if (($age >= 25) && ($age < 70)) {
    echo "Okey bro this good!";
} elseif (($age >= 16) && ($age < 25)) {
    echo "You very young BOY/GIRL";
} elseif (($age > 1) && ($age < 16)) { 
	echo "I think you children";
} else echo "This nice age!";

echo "\n";
if ($age > 1000) echo "\n!!YOU DIED!!\n";