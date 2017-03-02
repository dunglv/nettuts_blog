<?php
$database = "nettuts_blog";
$connection = mysqli_connect("localhost", "root", "", $database) or die ("<p class='error'>Sorry, we were unable to connect to the database server.</p>");

include 'includes/blogpost.php';
$post = new BlogPost;
print_r($post->getPosts($connection, '', '', ''));
