<?php if(count($orders)): ?>
	<table class="sortable_table">
		<thead>
			<tr>
				<th>Order Number</th>
				<th>Date</th>
				<th>Status</th>
				<th>Amount</th>
				<th>Notes</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($orders as $order): ?>
				<tr>
					<td><?=html::anchor($order->show_path(), '#' . $order)?></td>
					<td><?=date::full_date_time($order->created_at)?></td>
					<td><?=$order->status?></td>
					<td><?=format::dollar_format($order->order_amount())?></td>
					<td><?=$order->notes?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>
	<h2>Sales are coming soon.</h2>
	<h4>Once you get an order, this page will help you to process your sales.</h4>
<?php endif; ?>