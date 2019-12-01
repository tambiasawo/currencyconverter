<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIMPLE CONVERTER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body bgcolor="skyblue">
	<form method="post" action="converter.php" align="center">
	Amount:
	<input type="number" name="amt" size="10"></break>
	From:
	<select name="from">
		<option>USD</option>
		<option>GBP</option>
		<option>JPY</option>
		<option>CAD</option>
	 </select>
	To:
	<select name="to">
		<option>USD</option>
		<option>GBP</option>
		<option>JPY</option>
		<option>CAD</option>
	 </select>
</b>
	<input type="submit" name="sub" value="Convert">
	<input type="number" name="result">

	</form>
<hr>

<?php
	if(isset($_POST['sub']))
	{
		$amt=$_POST['amt'];
		$from=$_POST['from'];
		$to=$_POST['to'];

		if($from=='USD' AND $to == 'GBP')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt *.57;  // u can use round()
			echo "</h2></center>";
		}
		else if($from=='USD' AND $to == 'JPY')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt *.57;  // u can use round()
			echo "</h2></center>";
		}
		else if($from=='USD' AND $to == 'CAD')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt *.57;  // u can use round()
			echo "</h2></center>";
		}
		
		else if($from=='CAD' AND $to == 'GBP')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt *.57;  // u can use round()
			echo "</h2></center>";
		}
		else if($from=='CAD' AND $to == 'JPY')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt *.57;  // u can use round()
			echo "</h2></center>";
		}
		else if($from=='CAD' AND $to == 'USD')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt *1.5;  // u can use round()
			echo "</h2></center>";
		}

		else if($from=='GBP' AND $to == 'JPY')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt *.57;  // u can use round()
			echo "</h2></center>";
		}
		else if($from=='GBP' AND $to == 'CAD')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt *.57;  // u can use round()
			echo "</h2></center>";
		}
		else if($from=='GBP' AND $to == 'USD')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt *.57;  // u can use round()
			echo "</h2></center>";
		}

		else if($from=='JPY' AND $to == 'GBP')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt /.57;  // u can use round()
			echo "</h2></center>";
		}
		else if($from=='JPY' AND $to == 'CAD')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt /.2;  // u can use round()
			echo "</h2></center>";
		}
		else if($from=='JPY' AND $to == 'USD')
		{
			echo "<center><h2>The answer is: <b style='color:red;'>";
			echo $amt /.5;  // u can use round()
			echo "</h2></center>";
		}

	}
?>


</body>
</html>
