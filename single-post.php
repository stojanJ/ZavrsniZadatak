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
    <?php
    if (isset($_GET['post_id'])) {
        $sql = "SELECT * FROM posts WHERE id = {$_GET['post_id']}";
                    $statement = $conn->prepare($sql);
                    $statement->execute();
                    $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $singlePost = $statement->fetch();
                      ?>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">               
                <h2 class="blog-post-title"><a class="link" href="single-post.php?post_id=<?php echo($singlePost['id']) ?>"><?php echo($singlePost['Titile']) ?></a></h2>
                <p class="blog-post-meta"><?php echo($singlePost['Created_at']) ?> <a href="#"><?php echo($singlePost['Author']) ?></a></p>
                <p><?php echo($singlePost['Body']) ?></p>
            </div>
            <?php
            $sql = "SELECT * FROM comments WHERE comments.post_id = {$_GET['post_id']}";
                    $statement = $conn->prepare($sql);
                    $statement->execute();
                    $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $comments = $statement->fetchAll();
                    ?>
                    <h3>comments</h3>
                    <?php foreach($comments as $comment) { ?>
                            <ul>
                                <li>posted by: <strong><?php echo $comment['Author'] ?></strong><br>
                                <?php echo $comment['Text'] ?><hr>
                                </li>
                            </ul>
                           <?php } ?>   
            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>         
        </div>    
             <?php
                include('sidebar.php');
             ?>
    </div>
            <?php
                } else {
                    echo('post_id nije prosledjen kroz $_GET');
                    header("Location: ./posts.php");
                }
            ?>
</main>
   <?php
   include('footer.php');
   ?>
</footer>

</body>