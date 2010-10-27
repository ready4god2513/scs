<h2>Our Coffee</h2>
<?php foreach($products as $product): ?>
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