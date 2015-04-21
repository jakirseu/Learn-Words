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
  <div class="formContainer">
   
    <?php
    include 'connection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM worddb WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
      echo "<p class='bg-danger' style='padding:8px'>Record deleted successfully</p>";
    } else {
      echo "<p class='bg-danger'>Error deleting record</p>";
    }

    ?>
  </div> 
  <div class="formContainer">
    <a href="index.php" class="btn btn-success center-block" >Insert New word </a> </br>
    <a href="list.php" class="btn btn-success center-block" >See all words</a>

  </div>
</body>
</html>
