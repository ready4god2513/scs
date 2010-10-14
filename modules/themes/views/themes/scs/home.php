<?=View::factory('themes/scs/header')?>
<div id="banner">
	<?=html::image(theme::static_file_path() . '/images/rotation/spilled.jpg')?>
	<?=html::image(theme::static_file_path() . '/images/rotation/pouring.jpg')?>
	<?=html::image(theme::static_file_path() . '/images/rotation/stu.jpg')?>
</div>

<div id="content" class="box">
	<h2><span>Featured Roasts</span></h2>
	<?php foreach(ORM::factory('product')->find_all() as $product): ?>
		<div class="shopping-cart-list">
			<h3 class="coffee-type">
				<?=html::anchor($product->show_path(), $product->name)?> <span class="price"><?=$product->price?>lb</span>
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
<?=View::factory('themes/scs/footer')?>