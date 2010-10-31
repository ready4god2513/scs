<table id="edit-variants">
	<thead>
		<tr>
			<?php foreach($product->options as $option): ?>
				<th><?=$option->name?></th>
			<?php endforeach; ?>
			<th>SKU</th>
			<th>Price</th>
			<th>In Stock</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($product->variants as $variant): ?>
			<tr>
				<?php foreach($variant->options_variant as $option): ?>
					<td><?=$option->value?></td>
				<?php endforeach; ?>
				<td><?=$variant->sku?></td>
				<td><?=format::dollar_round($variant->price)?></td>
				<td><?=$variant->in_stock()?></td>
				<td><?=html::anchor('admin/variants/edit/' . $variant, 'edit', array('class' => 'edit-variant', 'id' => $variant))?></td>
				<td><?=html::anchor('#', html::image('public/images/order.gif'), array('class' => 'set-sort-order'))?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?=html::anchor('admin/variants/new/', 'New Inventory Item')?>

<?php foreach($product->variants as $variant): ?>
	<div id="variant-<?=$variant?>" class="variant-editing hide">
		<?=View::factory('admin/variants/_nested_form')->set('variant', $variant)?>
	</div>
<?php endforeach; ?>

<script type="text/javascript">
	$(function(){
		$('.edit-variant').click(function(){
			$('#variant-' + $(this).attr('id')).slideToggle();
			return false;
		});
	});
</script>