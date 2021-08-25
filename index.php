<?php
 //Include require file 
 require_once('Arithmetic.class.php');
 
 $indexArr = [1,3,0,-3,2,3,4,-2,-1,5,2,6,7,-5,8,9];
 //Get absolute disticnt count from $indexArr
 $aboluteCount = Arithmetic::getAbsoluteDistinctCount($indexArr); 
 echo 'Absolute disticnt count for given array is '.$aboluteCount;
?>

