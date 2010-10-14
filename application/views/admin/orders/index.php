<table class="sortable_table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Date Created</th>
			<th>Last Modified</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($orders as $order): ?>
			<tr>
				<td><?=html::anchor($order->edit_path(), $order->name)?></td>
				<td><?=$order->created_at?></td>
				<td><?=$order->updated_at?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>