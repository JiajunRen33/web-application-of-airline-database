<?php
   $query = "SELECT * FROM flight";
   $result = $connection->query($query);
   echo "Select flight number: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="FlightNumbers" value="';
        echo $row["FlightNumber"];
        echo '">' . $row["FlightNumber"] . "<br>";
   }
?>