<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$students = array(
    "CA221" => array(
        "Name" => "Sagal Ahmed",
        "Phone" => "0612345678",
        "Address" => "Hodan, Mogadishu"
    ),

    "CA223" => array(
        "Name" => "Ayaan Mohamed",
        "Phone" => "0623456789",
        "Address" => "Waberi, Mogadishu"
    ),

    "CA224" => array(
        "Name" => "Hodan Ali",
        "Phone" => "0634567890",
        "Address" => "Warta Nabada, Mogadishu"
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
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

echo "<tr>";
echo "<td>CA221</td>";
echo "<td>Sagal Ahmed</td>";
echo "<td>0612345678</td>";
echo "<td>Hodan, Mogadishu</td>";
echo "</tr>";

echo "<tr>";
echo "<td>CA223</td>";
echo "<td>Ayaan Mohamed</td>";
echo "<td>0623456789</td>";
echo "<td>Waberi, Mogadishu</td>";
echo "</tr>";

echo "<tr>";
echo "<td>CA224</td>";
echo "<td>Hodan Ali</td>";
echo "<td>0634567890</td>";
echo "<td>Warta Nabada, Mogadishu</td>";
echo "</tr>";

echo "</table>";

?>

</body>
</html>