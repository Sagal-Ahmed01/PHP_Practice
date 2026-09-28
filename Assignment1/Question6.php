<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$number1 = 8;
$number2 = 12;

$lcm = 1;

while ($lcm % $number1 != 0 || $lcm % $number2 != 0) {
    $lcm++;
}

echo "LCM is: " . $lcm;

?>
</body>
</html>