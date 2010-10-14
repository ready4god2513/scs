<h2>Our Coffee</h2>
<?php foreach($products as $product): ?>
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