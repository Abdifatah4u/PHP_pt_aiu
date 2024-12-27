<?php
$a = [2, 'Jaamac Kadiye', true];
print_r($a); //print_r(): prints array data to browser

$b = array(2, 'Jaamac Kadiye', true, 'AIU');
echo $b[1];
$hr = '<hr>';
echo $hr;
for ($i=0; $i < count($b); $i++) { 
	echo $b[$i].'<br>';
}



foreach ($b as $element) {
	echo $element.'<br>';
}

$associativeArray = ['jan'=> 'Janaury', '02' => 'Febraury'];
foreach ($associativeArray as $key => $value) {
	echo "$key => $value <br>";
}

$marks = [
	['Jaamac', 100, 92],
	['Mohamed', 82, 90],
	['Ali', 45],
	['Osman', 10, 90]
];

echo implode('#', $b);
echo $hr;
$aiu = 'Alimra International University';
print_r(explode(" ", $aiu));
?>

<table>
	<tr>
		<th>Name</th>
		<th>PHP</th>
		<th>SE</th>
	</tr>
	<?php
	foreach($marks as $key => $value){
		echo "<tr>";
		for ($i=0; $i < count($marks[$key]) ; $i++) { 
			echo "<td>" .$marks[$key][$i]. "</td>";
		}
		echo "</tr>";
	}	

	?>
</table>
<style type="text/css">
	table, th, td, tr {
		border: 1px solid;
		border-collapse: collapse;
	}
</style>