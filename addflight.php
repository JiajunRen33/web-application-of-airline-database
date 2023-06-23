<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>add flight</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $flightNumber= $_POST["FlightNmuber"];
   $Day = $_POST["DayOfWeek"];
   $AirlineCode =$_POST["airlines"];
   $AA =$_POST["ActualArriveTime"];
   $SA =$_POST["ScheduleArriveTime"];
   $ArriveAirport =$_POST["Aairport"];
   $AD =$_POST["ActualDepartTime"];
   $SD =$_POST["ScheduleDepartTime"];
   $DepartureAirport =$_POST["Dairport"];
   $AirplaneCode =$_POST["airplane"];
   
   $query = 'INSERT INTO flight values("' . $flightNumber . '","' . $Day . '","' . $AirlineCode . '","' . $AA . '","' . $SA . '","' . $ArriveAirport . '","' . $AD . '","' . $SD . '","' . $DepartureAirport . '","' . $AirplaneCode . '")';
   $numRows = $connection->exec($query);
   echo "Your flight was added!";
   $connection = NULL;
?>
</ol>
</body>
</html>