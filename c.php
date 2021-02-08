<?php 
function noOdds($arr) {
	$new_arr = array();
	for($i = 0; $i < count($arr); $i++){
		if($arr[$i] % 2 == 0){
			array_push($new_arr, $arr[$i]);
		}
	}
	return $new_arr;
}
?>