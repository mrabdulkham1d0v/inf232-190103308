<?php 
function sumOfCubes($nums) {
	$sum = 0;
	for($i = 0; $i < count($nums); $i++){
		$sum += pow($nums[$i],3) ;
	}
	return $sum;
}
?>