<head>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>




</head>

<?php

include "db_connect.php";
$keyform = $_GET["keyword"];
echo " you have searched for<br>" ;
echo $keyform;
$keyform = "%".$keyform."%";


// search the word sql
echo	"<h2> Show all questions containing the above word  </h2>";

$stmt = $mysqli->prepare("SELECT QID, Question, Answer FROM Question 	WHERE Question LIKE ?");  
$stmt->bind_param("s",$keyform);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($QID,$Question,$Answer);	
//$sql = "SELECT QID, Question, Answer FROM Question 	WHERE Question LIKE '%$keyform%'" ;

?>

<div id="accordion">


<?php
if ($stmt->num_rows > 0) {
    // output data of each row
    while( $stmt->fetch()) {
        // echo "<br> QID: ". $row["QID"]. " - Question: ". $row["Question"]. " " . $row["Answer"] . "<br>";
        echo "<h3>$Question</h3>";
        echo "<div><p>$Answer</p></div>";
    }
} else {
    echo "0 results";
}


?>
