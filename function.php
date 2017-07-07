<?php
$test = 1;
function get_argument(){
	global $test;
	$test = 2;
}
get_argument();
echo $test;
?>