<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Word Project of Jakir</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/word.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head> 
</body>
<div class="formContainer">

<?php
include 'connection.php';

$word = $_POST['word'];
$synonyms = $_POST['synonyms'];
$sentence = $_POST['sentence'];

$sql = "INSERT INTO worddb (word, synonyms, sentence)
VALUES ('$word', '$synonyms', '$sentence')";

if (mysqli_query($conn, $sql)) {
    echo '<a class="btn btn-success center-block" href="#" role="button">New record created successfully</a>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</br>
<a class="btn btn-primary center-block" href="index.php" role="button">Insert New</a>
</br>
<a class="btn btn-info center-block" href="list.php" role="button">See All Words</a>
	</div> <!-- /container -->

 
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
