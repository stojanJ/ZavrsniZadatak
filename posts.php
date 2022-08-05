<?php
$servername = "localhost";
$username = "root";
$password = "vivify";
$databaseName = "blog";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
}

?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog - posts</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

<body>

<header>
    <?php
    include('header.php');
    ?>
</header>

<main role="main" class="container">
<?php
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$statement = $conn->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$posts = $statement->fetchAll();
?>
    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <?php foreach ($posts as $post){?>

                <h2 class="blog-post-title"><a class="link" href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo($post['Title']) ?></a></h2>
                <p class="blog-post-meta"><?php echo($post['Created_at']) ?> <a href="#"><?php echo($post['Author']) ?></a></p>

                <p><?php echo($post['Body']) ?></p>
                <?php } ?>
            </div><!-- /.blog-post -->

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
           <?php
            include('sidebar.php');
           ?>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
   <?php
   include('footer.php');
   ?>
</footer>
</body>
</html>
