<h2>Shopping Cart</h2>
<?php if(!user::current()->cart->cart_contents_count()): ?>
	<h4 class="cart-empty">Coffee.  You need some.  Get it while it's hot.</h4>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Price Each</th>
				<th>Subtotal</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach(user::current()->cart->cart_items as $cart_item): ?>
				<tr id="cart-item-<?=$cart_item?>">
					<td><?=$cart_item->product->name?></td>
					<td><?=$cart_item->quantity?></td>
					<td><?=$cart_item->product->price?></td>
					<td><?=$cart_item->product_subtotal()?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3">subtotal</td>
				<td><?=user::current()->cart->subtotal()?></td>
			</tr>
		</tfoot>
	</table>
<?php endif; ?>