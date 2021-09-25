<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<body>

<?php
function setweight(int $weight = 50) {
  echo "The weight is : $weight <br>";
}

setweight(350);
setweight();
setweight();
setweight(80);
?>

</body>
</html>
