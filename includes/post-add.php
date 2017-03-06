<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_post_add'])) {
	$title = $_POST['title'];
	$alias = $_POST['alias'];
	$post = $_POST['post'];
	$tag = $_POST['tag'];
	$tag = rtrim($tag, ',');
	$tag_array = explode(',', $tag);
	$alias = convertAlias($alias);
	if ($_post->addPost($_db->connection, $title, $alias, $tag, $post, '1')) {
		echo "Add new artilce successful";
		header('location: '.$home_url.'/post/post-new');
	}else{
		echo "Fail to add new article";
		header('location: '.$home_url.'/post/post-new');
	}
} else {
	header('location: '.$home_url.'/post/post-new');
}
