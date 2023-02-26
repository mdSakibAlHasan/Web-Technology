<!DOCTYPE html>
<html>
<body>

<form action="sub.php" method="post">
National ID no: <input type="number" name="ID"><br>
Birth Day: <input type="number" name="day">
<input type="text" name="month">
<input type="number" name="year"><br>
<?php $ra = rand();
"Input capcha:" .$ra;
?>
<input type="submit">
</form>


</body>
</html>