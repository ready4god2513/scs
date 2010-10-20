<?php foreach($blogs as $blog): ?>
	<div class="blog-list">
		<h2><?=html::anchor($blog->show_path(), $blog->name)?></h2>
		<?=$blog->synopsis_formatted()?>
	</div>
<?php endforeach; ?>