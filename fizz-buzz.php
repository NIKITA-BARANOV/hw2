<?php

echo "Pls say me first number?\n";
$input = fopen ("php://stdin","r");
$FIZZ = fgets($input);
echo "Pls say me second number?\n";
$BUZZ = fgets($input);
echo "Pls say me last number?\n";
$last = fgets($input);

for($i = 1; $i <= $last; $i++ )
{
	if((($i % $FIZZ) == 0) && (($i % $BUZZ) == 0)){
		echo "","FB";
	}elseif(($i % $BUZZ) == 0){
		echo "","B";
	}elseif (($i % $FIZZ) == 0){
		echo "","F";
	}else{
		echo "", $i;
	}

}


