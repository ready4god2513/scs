<?=html::anchor('admin/categories/new', 'New Category')?> | 
<?=html::anchor('admin/products', 'Products')?>
<table class="sortable_table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Date Created</th>
			<th>Last Modified</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($categories as $category): ?>
			<tr>
				<td><?=html::anchor($category->edit_path(), $category->name)?></td>
				<td><?=$category->created_at?></td>
				<td><?=$category->updated_at?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>