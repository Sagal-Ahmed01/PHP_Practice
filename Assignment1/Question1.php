<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$number1 = 20;
$number2 = 35;
$number3 = 10;

if ($number1 > $number2 && $number1 > $number3) {
    echo "Greatest number is: " . $number1;
}
elseif ($number2 > $number1 && $number2 > $number3) {
    echo "Greatest number is: " . $number2;
}
else {
    echo "Greatest number is: " . $number3;
}

echo "<br>";

if ($number1 < $number2 && $number1 < $number3) {
    echo "Smallest number is: " . $number1;
}
elseif ($number2 < $number1 && $number2 < $number3) {
    echo "Smallest number is: " . $number2;
}
else {
    echo "Smallest number is: " . $number3;
}

?>

</body>
</html>