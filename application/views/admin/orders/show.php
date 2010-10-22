<h2>Order #<?=$order?></h2>


<div class="left" style="width:800px">

	<h4>Products Purchased</h4>
	<table>
		<thead>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($order->order_details as $item): ?>
			<tr>
				<td><?=html::anchor($item->product->edit_path(), $item->product->name)?></td>
				<td><?=$item->quantity?></td>
				<td><?=format::dollar_format($item->price)?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2">Total</td>
				<td><?=format::dollar_format($order->order_amount())?></td>
			</tr>
		</tfoot>
	</table>
	
	<h4>Order History</h4>
	<table>
		<thead>
			<tr>
				<th>Time</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($order->order_histories as $history): ?>
			<tr>
				<td><?=date::full_date_time($history->created_at)?></td>
				<td><?=$history->status?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
</div>

<div id="order_billing_shipping" class="right">
	<?=View::factory('order_billing_shippings/show')->set('address', $order->get_billing_address())?>
	
	<?=View::factory('order_billing_shippings/show')->set('address', $order->get_shipping_address())?>
</div>
<div class="clear"></div>