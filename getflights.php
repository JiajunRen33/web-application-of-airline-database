<h3>Here are the flights: </h3>
<table>
<?php

$result = $connection->query("select * from flight where ActualArrive = ScheduledArive ");
echo "<ol>";
while ($row = $result->fetch()) {
	echo "<tr><td>".$row["AirlineCODE"]."</td><td>".$row["FlightNumber"]."</td><td>".$row["ActualArrive"]."</td></tr>";
}
echo "</ol>";
?>
</table>