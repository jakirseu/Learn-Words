<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Word Project</title>

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
   <div class="formContainer">
    <a class="btn btn-success center-block" href="index.php" role="button">Insert New</a>
  </div>
</br>
<?php
include 'connection.php';

$sql = "SELECT id, word, synonyms, sentence FROM worddb";
$result = $conn->query($sql);

echo '<table class="table table-striped ">
<tr><th>ID</th> <th>Word</th> <th>Synonyms</th> <th>Sentence</th> <th>Edit</th> <th>Delete</th> </tr>';

if ($result->num_rows > 0) {
     // output data of each row
 while($row = $result->fetch_assoc()) {
   echo "<tr>
   <td><strong>". $row["id"]. "</strong></td>
   <td><strong>". $row["word"]. "</strong></td>
   <td> ". $row["synonyms"]. "</td> <td> " . $row["sentence"] . "</td>
   <td><a href='edit.php?id=". $row["id"]. "' >Edit<a/></td> 
   <td><a href='delete.php?id=". $row["id"]. "' class='delete'>Delete</a></td>
 </tr>";
}
} else {
 echo "0 results";
}
echo '</table>';
mysqli_close($conn);
?>

</div> <!-- /container -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script>
	$('.delete').bind('click', function() {
    if(!confirm('Are you sure?') )
      return false;
  });
</script>
</body>
</html>
