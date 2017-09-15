<?php

/**
 * ZCE Preparing CLI
 */

function note($string) {
	print "[NOTE] $string\n";
}

echo <<<EOT

*** ZCE Preparing CLI ***

Please, select a part to run:
    PHP Basics:
        1. Syntax


EOT;

echo 'Your choice: ';
$choice = (PHP_OS == 'WINNT')
	? stream_get_line(STDIN, 1024, PHP_EOL)
	: readline();

echo "\n";

switch ($choice) {
	case 1:
		echo "You chose PHP Basics: 1. Syntax\n\n";
		break;
	
	default:
		echo "Wrong number\n";
		break;
}

