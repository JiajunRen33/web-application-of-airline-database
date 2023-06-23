<?php
   $query = "SELECT * FROM airline";
   $result = $connection->query($query);
   echo "Select airline code: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="AirlineCode" value="';
        echo $row["AirlineCode"];
        echo '">' . $row["AirlineCode"] . "<br>";
   }
?>