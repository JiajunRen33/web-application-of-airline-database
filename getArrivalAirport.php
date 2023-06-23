<?php
   $query = "SELECT * FROM airport";
   $result = $connection->query($query);
   echo "Select arrival airport: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="Aairport" value="';
        echo $row["AirportCode"];
        echo '">' . $row["name"] . "<br>";
   }
?>