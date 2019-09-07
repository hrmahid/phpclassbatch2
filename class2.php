<?php 
	$a = 10;
	$b = 20;
	$c = 30;
	
	//Use of condition
	if($a > $b){
		echo "Number ".$a." is Largest";
	}
	else if($b > $c){
		echo "Number ".$b." is Largest";
	}
	else{
		echo "Number ".$c." is Largest";
	}
	
	echo "<br>";
	
	//switch case
	$color = "red";
	
	switch($color){
		case "red":
			echo "My Favorite color is Red";
			break;
		case "blue":
			echo "My Favorite color is blue";
			break;
		case "yello":
			echo "My Favorite color is Yello";
			break;
		default:
			echo "I am Blind";
			break;
	}
	
	echo "<br>";
	//php function
	function myname($name,$age){
		return "My name Is ".$name. " My age is ".$age;
	}
	
	echo myname("Mahid",20);
	echo "<br>";
	echo myname("HR",20);
	echo "<br>";
	echo myname("Habibur Rahman Mahid",30);
	
	
	
	
	

?>