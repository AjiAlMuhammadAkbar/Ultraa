<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<h2 align="center">Menentukan bilangan Ganjil Genap</h2>

	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
	  <div align="center">Bilangan: 
	    <input type="text" name="bil">
	    <br>
	    <br>
		<div align="center">
	    <input type="submit" name="submit" value="Submit">  
	  </div>
	</form>
	<br>
	<?php
	$tampil = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil = $_POST["bil"];
			
			if ($bil % 2 == 0){ //Kondisi
			    echo "$bil Merupakan Bilangan Genap"; //Kondisi true
		}else {
			    echo "$bil Merupakan Bilangan Ganjil"; //Kondisi false
		}
	}
?>
</body>
</html>