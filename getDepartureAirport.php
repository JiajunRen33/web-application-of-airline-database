<?php
   $query = "SELECT * FROM airport";
   $result = $connection->query($query);
   echo "Select departure airport: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="Dairport" value="';
        echo $row["AirportCode"];
        echo '">' . $row["name"] . "<br>";
   }
?>