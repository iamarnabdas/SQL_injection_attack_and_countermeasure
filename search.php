<?php

if ($mysqli->connect_errno){
     echo "Failed to Connect : (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
     }

//  if there are any data display
$sql = "SELECT QID, Question, Answer FROM Question";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> QID: ". $row["QID"]. " - Question: ". $row["Question"]. " " . $row["Answer"] . "<br>";
    }
} else {
    echo "0 results";
}


?>
