<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$length = 10;
$width = 5;
$area = calculateArea($length, $width);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <p>The area of the rectangle with length <?php echo $length; ?> and width <?php echo $width; ?> is: <?php echo $area; ?></p>
</body>
</html>
