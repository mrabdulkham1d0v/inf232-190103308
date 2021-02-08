<?php 
function leftShift($arr, $num) {
	$remainder = array_splice($arr,0, $num%count($arr));
	return array_merge($arr, $remainder);
}

function rightShift($arr, $num) {
	$remainder = array_splice($arr,0, count($arr) - $num%count($arr));
	return array_merge($arr, $remainder);
}
?>