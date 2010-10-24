<table class="sortable_table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Date Created</th>
			<th>Last Modified</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($customers as $customer): ?>
			<tr>
				<td><?=html::anchor($customer->show_path(), $customer->username)?></td>
				<td><?=$customer->created_at?></td>
				<td><?=$customer->updated_at?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>