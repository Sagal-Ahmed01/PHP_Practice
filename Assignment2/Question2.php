<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

echo "<style>
table {
    border-collapse: collapse;
}

th {
    background-color: #d3d3d3;
}

td:first-child {
    background-color: #d3d3d3;
}

th, td {
    border: 1px solid black;
    padding: 8px;
}
</style>";

echo "<table>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

echo "<tr>";
echo "<td>Light</td>";
echo "<td>Light Red</td>";
echo "<td>Light Green</td>";
echo "<td>Light Blue</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Normal</td>";
echo "<td>Normal Red</td>";
echo "<td>Normal Green</td>";
echo "<td>Normal Blue</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Dark</td>";
echo "<td>Dark Red</td>";
echo "<td>Dark Green</td>";
echo "<td>Dark Blue</td>";
echo "</tr>";

echo "</table>";

?>


</body>
</html>