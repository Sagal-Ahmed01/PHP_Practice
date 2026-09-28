<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$number = 7;
$prime = true;

for ($i = 2; $i < $number; $i++) {

    if ($number % $i == 0) {
        $prime = false;
    }

}

if ($prime == true) {
    echo "The number is Prime";
}
else {
    echo "The number is Non-Prime";
}

?>
</body>
</html>