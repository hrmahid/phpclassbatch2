<?php
	//Normal array
	$cars = array("bmw","pajaru","alone","tata","marcitice","bagi","taxi");
	
	$length = count($cars); 
	
	for($i=0;$i < $length;$i++){
		//echo $i;
		echo $cars[$i];
		echo "<br>";
	}
	
	//associative array
	
	$person = array(
		"name" => "A Rahman",
		"age" => 20,
		"education" => "Diploma In Eng."
	);
	
	echo $person['name'];
	echo "<br>";
	echo $person['age'];
	
	echo "<h1>Associative Array Using Foreach Loop</h1>";
	
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

	foreach($age as $x => $y){
		echo "Name=" . $x . ", Age=" . $y;
		echo "<br>";
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	






?>