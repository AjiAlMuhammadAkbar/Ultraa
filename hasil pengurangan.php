<html>
<body>
<h1> PENGURANGAN </h1>
<form method="post">
Nilai 1 = <input type="number" name="a" value="<?php echo $_POST["b"] ?>" required><br>
Nilai 2 = <input type="number" name="b" value="<?php echo $_POST["b"] ?>" required><br>
<?php
$a=$_POST["a"];
$b=$_POST["b"];
$pengurangan = $a-$b;
echo "Hasil = $pengurangan";
?>
<br><input type="submit" value="hasil">
</form>
</body>
</html>