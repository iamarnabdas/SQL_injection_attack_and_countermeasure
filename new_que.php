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
$new_question = $_GET["newquestion"];
$new_answer = $_GET["newanswer"];
$new_question ="'".$new_question."'"
$new_answer ="'".$new_answer."'"


echo " you have entered new question: for<br>" ;
echo $new_question;
echo " you have entered the answer of question: for<br>" ;
echo $new_answer;




// search the word sql
echo	"<h2> New Question And New Answer </h2>";

$stmt = $mysqli->prepare("INSERT INTO Question (QID, Question, Answer) VALUES (NULL, ?,?) ");  
$stmt->bind_param("ss",$new_question,$new_answer);
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
