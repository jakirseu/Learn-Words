<?php
include 'connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM worddb WHERE id=$id";


$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    $uniqueID = $row["id"];
    $word = $row["word"];
    $synonyms = $row["synonyms"];
    $sentence = $row["sentence"];

    
  }
} else {
  echo "0 results";
}


mysqli_close($conn);
?>


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
  <div class="container">
   
    <form class="form-signin" action="processor.php" method="post">
      <h2 class="form-signin-heading">Input the word</h2>
      <label for="inputEmail" class="sr-only">Word</label>
      <input type="text" id="word" name="word" class="form-control" placeholder="Enter Word" required autofocus>
      <label for="Synonyms"   class="sr-only">Synonyms</label>
      <input type="text" id="synonyms" name="synonyms" class="form-control" placeholder="Enter Synonyms" required>
      <label for="Sentence" class="sr-only">Sentence</label>
      
      <textarea rows="4" cols="50"  id="sentence" name="sentence" class="form-control" placeholder="Enter Relevent Sentence" ></textarea>
    </br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Update Word</button> </br>
    <a class="btn btn-success center-block" href="list.php" role="button">See All Words</a>
  </form>

</div> <!-- /container -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
   
    $word =  "<?php echo $word; ?>"; 
    $("#word").val( $word );

    $synonyms =  "<?php echo $synonyms; ?>"; 
    $("#synonyms").val( $synonyms );

    $sentence =  "<?php echo $sentence; ?>"; 
    $("#sentence").val( $sentence );
  });

</script>
</body>
</html>
