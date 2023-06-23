<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update flight</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $airlineCode= $_POST["AirlineCode"];
   $flightNumber = $_POST["FlightNumbers"];
   $NewDeparture =$_POST["NewDepartureTime"];

   
   $query = 'UPDATE flight SET ActualDepart = "' . $NewDeparture . '" WHERE AirlineCode = "' . $airlineCode . '" AND FlightNumber = "' . $flightNumber . '"';
   $numRows = $connection->exec($query);
   echo "The actual depart time was updated!";
   $connection = NULL;
?>
</ol>
</body>
</html>