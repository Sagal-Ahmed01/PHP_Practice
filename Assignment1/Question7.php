<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$number1 = 18;
$number2 = 24;

$hcf = 1;

for ($i = 1; $i <= $number1 && $i <= $number2; $i++) {

    if ($number1 % $i == 0 && $number2 % $i == 0) {
        $hcf = $i;
    }

}

echo "HCF is: " . $hcf;

?>
</body>
</html>