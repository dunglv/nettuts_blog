<div class="col-md-6 col-md-offset-3">
	<form action="<?= $home_url.'/post/post-add' ?>" method="POST" role="form" accept-charset="UTF-8">
		<legend>Creat new article</legend>
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control" name="title" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Alias</label>
			<input type="text" class="form-control" id="" name="alias" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" id="" cols="30" name="post" rows="10"></textarea>
		</div>
		<div class="form-group">
			<label for="">Tag</label>
			<input type="text" class="form-control" id="" name="tag" placeholder="Input field">
		</div>
		<button type="submit" name="submit_post_add" class="btn btn-primary">Submit</button>
	</form>
</div>