<div id="content" class="box">
	
	<?php foreach($pages as $page): ?>
		<div class="page-list">
			<h3><?=html::anchor($page->show_path(), $page->name)?></h3>
			<?=$page->content?>
		</div>
	<?php endforeach; ?>
	
</div>