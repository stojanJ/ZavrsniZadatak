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
    <title>Single-post</title>
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
        <input type="text" name="ime" class="" placeholder="Ime"><br>
        <input type="text" name="prezime" class="" placeholder="Prezime"><br>
        <input type="radio" id="zenski" value="Z" name="radio-btn">
        <label for="zenski">Z</label>
        <input type="radio" id="muski" value="M" name="radio-btn">
        <label for="muski">M</label><br>
      <button type="submit" name="submit-author" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
      </div>
    <?php
    include('sidebar.php');
   ?>
        </div>
</div>
</main>
   <?php
   include('footer.php');
   ?>
</footer>

</body>