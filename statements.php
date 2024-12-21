<?php
#Types of PHP statements
//1. Assignment st (= assignment operator)
$name = 'Jaamac Kadiye';

//2. Print statement
print $name . '<br>';
echo $name. '<hr>';;

//If statement 
/*
1. True
2. Logically true
3. Truelly statement (1, value,) 

1. False
2. Logically false
3. Falselly statement (0, null)
*/
$num = 5;
if($num == 7) {
	echo 'Condition is true'. $num;
}elseif ($num == 5) {
	echo 'Condition is true'. $num;
}else {
	echo 'Condition is false';
}
echo '<hr>';
//Switch statement
$num = 4;
switch($num) {
	case 4:
		echo 'The num is 4';
		break;
	case 7:
		echo 'The num is 7';
		break;
	default:
		echo 'The num is not in the case list';
}
echo '<hr>';
//for loop 
for($i = 2; $i < 10; $i++) {
	print $i. '<br>';
}

echo '<hr>';
//while loop statement
$i = 10;
while($i > 0) {
	print $i. '<br>';
	$i--;
}

echo '<hr>';
//Include/Require statement

include 'test.php';
 // require 'test.php';
// echo 'Jaamac';
 echo $university;
?>