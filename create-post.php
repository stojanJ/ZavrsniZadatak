<?php
include('links/connection.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Create-post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>
<body>
<header>
    <?php
    include('header.php');
    ?>
</header>
<main>
<div class="row">
        <div class="col-sm-8 blog-main">

            <div class="blog-post">    
<form action="links/create.php" method="POST">
  <div class="center" >
      <input type="text" name="Title" class="" placeholder="Title"><br>
      <input type="text" name="Author" class="" placeholder="Author"><br>
      <textarea type="text" name="Body"style="width:300px; height:400px;"></textarea><br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
  <?php
    include('sidebar.php');
   ?>
</div>
</main>
<footer class="blog-footer">
   <?php
   include('footer.php');
   ?>
</footer>

</body>