<?php
   $query = "SELECT * FROM airline";
   $result = $connection->query($query);
   echo "Select airline: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="airlines" value="';
        echo $row["AirlineCode"];
        echo '">' . $row["name"] . "<br>";
   }
?>