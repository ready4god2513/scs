<h2>Shopping Cart</h2>
<?php if(!cart::get()->cart_contents_count()): ?>
	<?=View::factory('themes/' . theme::get() . '/carts/cart_empty')?>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="2">Order Subtotal</td>
				<td><?=format::dollar_format(cart::get()->subtotal())?></td>
			</tr>
		</tfoot>
		<tbody>
			<?php foreach(cart::get()->cart_items as $cart_item): ?>
				<tr id="cart-item-<?=$cart_item?>">
					<td><?=html::anchor($cart_item->product->show_path(), $cart_item->name)?></td>
					<td>
						<?=form::open('cart/update_quantity')?>
							<?=form::hidden('id', $cart_item)?>
							<?=form::input(array('name' => 'quantity', 'value' => $cart_item->quantity, 'class' => 'cart-item-quantity-input', 'id' => 'quantity-' . $cart_item))?>
						<?=form::close()?>
					</td>
					<td><?=format::dollar_format($cart_item->product_subtotal())?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		
	</table>
	<div class="right padd-me">
		<?=form::open('cart/billing', array('method' => 'GET'))?>
			<?=form::submit('submit', 'Checkout')?>
		<?=form::close()?>
	</div>
	<div class="clear"></div>
<?php endif; ?>