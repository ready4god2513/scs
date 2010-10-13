<h2 id="product-name"><?=$product->name?></h2>
<div class="shopping-cart-description left">
	<h3 class="coffee-type">
		<span class="price"><?=$product->price?>lb</span>
	</h3>
	<p>
		<?=$product->description?>
	</p>
</div>

<div class="product-add-to-cart-form right">
	<?=form::open('cart/add')?>
		<?=form::hidden('product_id', $product)?>
		<div class="choose-quantity">
			<?=form::label('quantity', 'Quantity')?>
			<?=form::input(array('name' => 'quantity', 'value' => 1, 'class' => 'cart-item-quantity-input'))?>
		</div>
		<div class="add-to-cart-button">
			<?=form::submit('submit', 'Add to Cart')?>
		</div>
	<?=form::close()?>
</div>
<div class="clear"></div>