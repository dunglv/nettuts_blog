<?php foreach($_post->getPosts($_db->connection, '', '', '') as $post){ ?>
	<div class="col-md-4">
		<h3><a href="<?= $home_url.'/post/'.$post['id'] ?>"><?= $post['title']; ?></a></h3>
		<div class="content">
			<?= $post['post']; ?>
		</div>
		<div class="info">
			<?= $post['author_id']; ?>
		</div>
	</div>
	<?php } ?>