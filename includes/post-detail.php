<?php 
$id = $_GET['id'];
foreach ($_post->getPosts($_db->connection, $id, '', '') as $post) { ?>
	<div class="col-md-6 col-md-offset-3">
		<h3><a href="<?= $home_url.'/post/'.$post['post_id'] ?>"><?= $post['title']; ?></a></h3>
		<div class="content">
			<?= $post['post']; ?>
		</div>
		<div class="info">
			<?= $post['first_name']; ?>
		</div>
	</div>
<?php } ?>