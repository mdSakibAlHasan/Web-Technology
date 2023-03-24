<!DOCTYPE html>
<html>
<body>

<?php
$student = array("sakib"=>"3.5", "fahim"=>"3.7", "momin"=>"3.8");
$given_name = "fahim";
$cgpa = $student[$given_name];

echo $given_name. " = " . $cgpa;
?>

</body>
</html>