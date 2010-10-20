<div id="content-home" class="box-home">
	<h2><span>Featured Products</span></h2>
	<?php foreach(ORM::factory('product')->find_all() as $product): ?>
		<div class="shopping-cart-list">
			<h3>
				<?=html::anchor($product->show_path(), $product->name)?> <span class="price"><?=$product->price?></span>
			</h3>
			<p>
				<?=$product->short_description?>
			</p>
			<p class="notes">
				**<?=$product->marketing_description?>**
			</p>
		</div>
	<?php endforeach; ?>
	<div class="clear"></div>
</div>