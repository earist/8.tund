<?php

	//calc.php
	
	function multiply($x, $y){
		$answer = $x * $y;
		return $answer;
	}
	
	function devide($x, $y){
		$answer = $x / $y;
		return $answer;
	}
	
	$result = 0;
	$result = multiply(2, 5);
	var_dump($result);
	
	$result = 0;	//Nulli paneme muutujaks, millel hiljem on väärtus (otseselt vajalik pole hetkel)
	$result =devide (25, 5);			//input type hidden- kasutajale ei näidata, aga väärtus saadetakse kaasa (all)
	var_dump($result);
	
	$multiply_result = $divide_result =0;	//defineerime muutujad
	
	if(isset($_GET["operator"])){				//vaatab kas aadressireal on operator- GET näitas
		echo $_GET["operator"];
		
		if ($_GET["operator"] == "multiply"){
			//võtsin aadressirealt kaks arvu funktsiooni
			$multiply_result =multiply($_GET["number_one"], $_GET["number_two"]);
			
		}
		else if($_GET["operator"] == "divide"){
			//võtsin aadressirealt kaks arvu funktsiooni
			$divide_result =divide($_GET["number_one"], $_GET["number_two"]);

		}
	}
	
?>
<h1> Korruta </h1>
<form>
	<input type="hidden" name="operator"value="multiply">
	<input name="number_one"> x <input name="number_two">
	= <?php echo $multiply_result;?>
	<input type="submit">

</form>

<h1> Jaga </h1>
<form>
	<input type="hidden" name="operator"value="divide">
	<input name="number_one"> / <input name="number_two">
	= <?=$divide_result;?>
	<input type="submit">

</form>
