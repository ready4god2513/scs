<?php foreach($blogs as $blog): ?>
	<div class="blog-list">
		<h3><?=html::anchor($blog->show_path(), $blog->name)?></h3>
		<?=$blog->content?>
	</div>
<?php endforeach; ?>