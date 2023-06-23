<?php
   $query = "SELECT * FROM airplane";
   $result = $connection->query($query);
   echo "Select airplane: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="airplane" value="';
        echo $row["AirplaneID"];
        echo '">' . $row["TypeNAME"] . "<br>";
   }
?>