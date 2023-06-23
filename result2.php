<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>The result</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>The flights:</h1>
<table>
<?php
   $AirlineCode= $_POST["Acode"];
   $day= $_POST["Day"];
   $query1 = 'SELECT AirlineCODE, FlightNumber, City as DepartCity  FROM flight, airport WHERE AirlineCODE = "' . $AirlineCode . '" AND DayOfWeek = "' . $day . '" AND flight.DepartAirportCODE = airport.AirportCode';
   $query2 = 'SELECT AirlineCODE, FlightNumber, City as AriveCity  FROM flight, airport WHERE AirlineCODE = "' . $AirlineCode . '" AND DayOfWeek = "' . $day . '" AND flight.AriveAirportCODE = airport.AirportCode';
	
   $result=$connection->query($query2);
    
    while ($row=$result->fetch()) {
	echo "<tr><td>".$row["AirlineCODE"]."</td><td>".$row["FlightNumber"]."</td><td>".$row["AriveCity"]."</td></tr>";
    }
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>