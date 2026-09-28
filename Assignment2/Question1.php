<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

echo "All elements:<br>";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "<br><br>";

$total = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $total = $total + $numbers[$i];
}

echo "Total of all elements = " . $total . "<br>";

$evenTotal = 0;

for ($i = 0; $i < count($numbers); $i++) {

    if ($numbers[$i] % 2 == 0) {
        $evenTotal = $evenTotal + $numbers[$i];
    }
}

echo "Total of even elements = " . $evenTotal . "<br>";

$oddTotal = 0;

for ($i = 0; $i < count($numbers); $i++) {

    if ($numbers[$i] % 2 != 0) {
        $oddTotal = $oddTotal + $numbers[$i];
    }
}

echo "Total of odd elements = " . $oddTotal . "<br>";

$minimum = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {

    if ($numbers[$i] < $minimum) {
        $minimum = $numbers[$i];
    }
}

echo "Minimum element = " . $minimum . "<br>";


echo "Position(s) of minimum element: ";

for ($i = 0; $i < count($numbers); $i++) {

    if ($numbers[$i] == $minimum) {
        echo $i . " ";
    }
}

echo "<br>";



$maximum = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {

    if ($numbers[$i] > $maximum) {
        $maximum = $numbers[$i];
    }
}

echo "Maximum element = " . $maximum . "<br>";


echo "Position(s) of maximum element: ";

for ($i = 0; $i < count($numbers); $i++) {

    if ($numbers[$i] == $maximum) {
        echo $i . " ";
    }
}

?>

</body>
</html>