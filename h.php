<?php 
function reverseImage($image) {
	for($i = 0; $i<count($image);$i++){
		for($j = 0; $j<count($image[$i]);$j++){
			if($image[$i][$j] == 0){
				$image[$i][$j] = 1;
			} elseif ($image[$i][$j] == 1){
				$image[$i][$j] = 0;
			}
		}
	}
	return $image;
}
?>