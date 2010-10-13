<table class="sortable_table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Date Created</th>
			<th>Last Modified</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($pages as $page): ?>
			<tr>
				<td><?=html::anchor($page->edit_path(), $page->name)?></td>
				<td><?=$page->created_at?></td>
				<td><?=$page->updated_at?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>