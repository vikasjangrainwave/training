<!DOCTYPE html>
<html>
<body>

<?php
$city = array("Hisar", "Rohtak", "Sirsa","Bhiwani","Jind"); 

echo current($city) . "<br>";
echo next($city) . "<br>";

echo reset($city);
?>

</body>
</html>
