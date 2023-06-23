<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>The average</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>The flights:</h1>

<table>
<?php
   $Day= $_POST["DayToAverage"];
   $query = 'SELECT AVG(MaxSeatNum) FROM flight AS F INNER JOIN airplane AS A ON F.AirplaneCODE = A.AirplaneID INNER JOIN airplanetype AS AT ON A.TypeNAME = AT.TypeName WHERE F.DayOfWeek = "' . $Day . '"';
   $result=$connection->query($query);
    while ($row=$result->fetch()) {
	echo "The average seats of that day is :";
	echo "<tr><td>".$row["AVG(MaxSeatNum)"]."</td></tr>";
    }
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>