<table class="sortable_table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Date Created</th>
			<th>Last Modified</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($products as $product): ?>
			<tr>
				<td><?=html::anchor($product->edit_path(), $product->name)?></td>
				<td><?=$product->created_at?></td>
				<td><?=$product->updated_at?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>