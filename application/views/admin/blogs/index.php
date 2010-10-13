<table class="sortable_table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Date Created</th>
			<th>Last Modified</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($blogs as $blog): ?>
			<tr>
				<td><?=html::anchor($blog->edit_path(), $blog->name)?></td>
				<td><?=$blog->created_at?></td>
				<td><?=$blog->updated_at?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>