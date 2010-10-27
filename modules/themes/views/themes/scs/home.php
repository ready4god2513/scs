<div id="banner">
	<?=theme::image('images/rotation/spilled.jpg')?>
	<?=theme::image('images/rotation/pouring.jpg')?>
	<?=theme::image('images/rotation/stu.jpg')?>
</div>

<div id="content-home" class="box-home">
	<h2><span>Featured Roasts</span></h2>
	<?php foreach(ORM::factory('product')->find_all() as $product): ?>
		<div class="shopping-cart-list">
			<h3 class="coffee-type">
				<?=html::anchor($product->show_path(), $product->name)?> <span class="price"><?=$product->base_price()?>lb</span>
			</h3>
			<p>
				<?=$product->description?>
			</p>
			<p class="notes">
				**<?=$product->description?>**
			</p>
		</div>
	<?php endforeach; ?>
	<div class="clear"></div>
</div>