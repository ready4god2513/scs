<table class="sortable_table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Status</th>
			<th>Date Created</th>
			<th>Last Modified</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($themes as $theme): ?>
			<tr>
				<td><?=html::anchor($theme->edit_path(), $theme->name)?></td>
				<td><?=$theme->status?></td>
				<td><?=$theme->created_at?></td>
				<td><?=$theme->updated_at?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>