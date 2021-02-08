<?php 
function largestSwap($num) {
	$num1 = intval(strrev(strval($num)));
	if($num1 <= $num){
		return true;
	}
	return false;
}
?>