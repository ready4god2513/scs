<h2 id="product-name"><?=$product->name?></h2>
<div class="shopping-cart-description left">
	<p>
		<?=$product->description_formatted()?>
	</p>
</div>

<div class="product-add-to-cart-form right">
	<?=form::open('cart/add')?>
		<?=form::hidden('product_id', $product)?>
		<div class="choose-quantity">
			<?=form::variant_dropdown($product)?>
		</div>
		<div class="add-to-cart-button">
			<?=form::submit('submit', 'Add to Cart')?>
		</div>
	<?=form::close()?>
</div>
<div class="clear"></div>