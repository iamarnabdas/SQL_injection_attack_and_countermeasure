

<html>

<head>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

</head>


<body>
	<h1>Project Question Page</h1>
	
<?php
//four variables
$host = "localhost";
$username = "root";
$user_pass = "";
$database = "test";



//create a database
$mysqli = new mysqli($host, $username, $user_pass, $database);


?>






<form class="form-horizontal"  action ="/searchkey.php">
<fieldset>

<!-- Form Name -->
<legend>Search Question-Answers</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Input</label>
  <div class="col-md-6">
    <input id="keyword" name="keyword" type="search" placeholder="e.g. project" class="form-control input-md" required="">
    <p class="help-block">enter a word to search word related questions</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Search</button>
  </div>
</div>

</fieldset>
</form>









<hr>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add New Question And Answer</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newquestion">Add question</label>  
  <div class="col-md-5">
  <input id="newquestion" name="newquestion" type="text" placeholder="e.g who is the prime minister?" class="form-control input-md" required="">
  <span class="help-block">write the question to be added here</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newanswer">Add Answer</label>
  <div class="col-md-5">
    <input id="newanswer" name="newanswer" type="password" placeholder="e.g. Narendra Modi" class="form-control input-md" required="">
    <span class="help-block">write the the answer of question</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Sumit</button>
  </div>
</div>

</fieldset>
</form>




<?php





$mysqli->close();
     
 

?>
</body>


</html>
