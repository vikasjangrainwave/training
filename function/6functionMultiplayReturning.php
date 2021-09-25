<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

<?php
function mul(int $x, int $y) {
  $z = $x*$y;
  return $z;
}

echo "5*10 = " . mul(5,10) . "<br>";
echo "7*13 = " . mul(7,13) . "<br>";
echo "2*4 = " . mul(2,4);
?>

</body>
</html>
