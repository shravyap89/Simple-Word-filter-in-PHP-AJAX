#!/usr/local/bin/php
<?php

$q= $_REQUEST["q"];

$wordlist = array('maverick', 'ranger', 'rocket', 'chicago', 'bear', 'wizard', 'seattle', 'atlanta', 'miami', 'austin', 'boston', 'pittsburgh', 'heat', 'saint', 'hawk', 'king');

$pieces = explode(" ", $q);

foreach ($pieces as $value) {
	$counter = strlen($value);
    $counter1 = strlen($value);

    foreach ($wordlist as $value1) {
		if (strpos($value, $value1) !== false) {
			$counter = $counter - strlen($value1);         
        }
    }
      
    if ($counter == 0) {
		for ($x = 1; $x <= $counter1; $x++) {
			echo "*";
        }
        echo '&nbsp;';
    }
	
    else  {
        echo $value;
        echo '&nbsp;';
    }
}
?>