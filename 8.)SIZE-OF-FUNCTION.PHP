<!DOCTYPE html>
<html>
<body>

<?php
$states = array (
array("satates","capitals"),
  array("Haryana","Chandigarh"),
  array("Himachal Pradesh","Shimla"),
  array("Punjab","Chandigarh"),
  array("Goa","Panaji")
);
echo  "states with there capitals </br>";
echo $states[0][0]."&nbsp&nbsp=>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$states[0][1]."</br></br>";
echo $states[1][0]."&nbsp&nbsp=>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$states[1][1]."</br></br>";
echo $states[2][0]."&nbsp&nbsp=>&nbsp&nbsp&nbsp&nbsp".$states[2][1]."<br><br>";
echo $states[3][0]."&nbsp&nbsp=>&nbsp&nbsp&nbsp&nbsp".$states[3][1]."<br><br>";
echo $states[4][0]."&nbsp&nbsp=>&nbsp&nbsp&nbsp&nbsp".$states[4][1]."<br><br>";
echo "no. of states&nbsp" .sizeof($states);
?>

</body>
</html>
