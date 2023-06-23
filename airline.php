<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Airline</title>
</head>

<body>
<?php
include 'connectdb.php';
?>

<h1>Welcome to the Airline Database System </h1>

<img src="1.jpeg" alt="Flight">

<img src="2.jpeg" alt="Airplane">

<h2>1. show all the flights(actual arrive time = schedule arrive time)</h2>
<?php
   include 'getflights.php';
?>

<p>
<hr>
<p>

<h2>2. show the selected flights</h2>
<form action="result2.php" method="post">
  <label for="Acode">Enter airline code:</label><br>
  <input type="text" id="Acode" name="Acode" ><br>
  <label for="Day">Enter day:</label><br>
  <input type="text" id="Day" name="Day" ><br><br>
  <input type="submit" value="Submit">
  
</form>

<p>
<hr>
<p>

<h2>3. ADD A NEW Flight:</h2>
<form action="addflight.php" method="post">
<br>
<?php
include 'getairline.php';
?>
<br>
<?php
include 'getDepartureAirport.php';
?>
<br>
<?php
include 'getArrivalAirport.php';
?>
<br>
<?php
include 'getAirplane.php';
?>
<br>

<label for="FlightNmuber">Enter flight number:</label><br>
<input type="text" id="FlightNmuber" name="FlightNmuber" ><br>
<br>
<label for="DayOfWeek">Enter day of the week:</label><br>
<input type="text" id="DayOfWeek" name="DayOfWeek" ><br>
<br>
<label for="ActualArriveTime">Enter Actual Arrive Time:</label><br>
<input type="text" id="ActualArriveTime" name="ActualArriveTime" ><br>
<br>
<label for="ScheduleArriveTime">Enter Schedule Arrive Time:</label><br>
<input type="text" id="ScheduleArriveTime" name="ScheduleArriveTime" ><br>
<br>
<label for="ActualDepartTime">Enter Actual Departure Time:</label><br>
<input type="text" id="ActualDepartTime" name="ActualDepartTime" ><br>
<br>
<label for="ScheduleDepartTime">Enter Schedule Departure Time:</label><br>
<input type="text" id="ScheduleDepartTime" name="ScheduleDepartTime" ><br>
<br>
<input type="submit" value="Add New Flight">
</form>

<p>
<hr>
<p>

<h2>4. Update the departure time of Flight:</h2>
<form action="UpdateFlight.php" method="post">
<br>
<?php
include 'getAirlineCode.php';
?>
<br>
<?php
include 'getFlightNumber.php';
?>
<br>


<label for="NewDepartureTime">Enter New Actual Departure Time:</label><br>
<input type="text" id="NewDepartureTime" name="NewDepartureTime" ><br>
<br>

<input type="submit" value="Update New Departure Time">
</form>

<p>
<hr>
<p>

<h2>5. Calculate the average number of seats available on all flights on a day:</h2>
<form action="CalculateAverage.php" method="post">
<br>


<label for="DayToAverage">Enter the day:</label><br>
<input type="text" id="DayToAverage" name="DayToAverage" ><br>
<br>

<input type="submit" value="Calculate the average">
</form>

<?php
$connection = NULL;
?>

</body>
</html>