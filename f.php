<?php
function isPalindrome($n) {
	$palindrome = strrev(strval($n));
	return strval($n) == $palindrome;
}
?>