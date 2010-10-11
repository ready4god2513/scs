<div id="content" class="box">
	
	<?php foreach($blogs as $blog): ?>
		<div class="blog-list">
			<h3><?=html::anchor($blog->show_path(), $blog->title)?></h3>
			<?=$blog->content?>
		</div>
	<?php endforeach; ?>
	
</div>