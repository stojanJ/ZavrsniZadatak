<?php

include 'connection.php';

if(isset($_REQUEST['submit'])){
    $author = $_REQUEST['Author'];
    $body = $_REQUEST['Body'];
    $title = $_REQUEST['Title'];
    $time = date("Ymd");
    if(empty($author) || empty($body) || empty($title)){
        echo "Author, Text and Title can not be empty";
        header("Location: create-post.php");
      }else{ 
        $sql = "INSERT INTO posts (Titile,Body,Author,Created_at) VALUES ('$title', '$body', '$author', '$time')";
        $statement = $conn->prepare($sql);
        $statement->execute();  
        header("Location: ../posts.php");
    }
  }
if(isset($_REQUEST['submit-author'])){
    $ime = $_REQUEST["ime"];
    $prezime = $_REQUEST["prezime"];
    $pol = $_REQUEST["radio-btn"];
    if(empty($ime) || empty($prezime) || empty($pol)){
        echo "Author, Text and Title can not be empty";
        header("Location: create-author.php");
    }else{
        $sql = "INSERT INTO author (ime,prezime,pol) VALUES ('$ime', '$prezime','$pol')";
        $statement = $conn->prepare($sql);
        $statement->execute(); 
        header("Location: ../posts.php");     
    }
}

?>