<table id="edit-variants">
	<thead>
		<tr>
			<?php foreach($product->options as $option): ?>
				<th><?=$option->name?></th>
			<?php endforeach; ?>
			<th>SKU</th>
			<th>Price</th>
			<th>In Stock</th>
			<th colspan="3"></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($product->variants as $variant): ?>
			<tr>
				<?php foreach($variant->options_variant as $option): ?>
					<td><strong><?=$option->value?></strong></td>
				<?php endforeach; ?>
				<td><?=$variant->sku?></td>
				<td><?=format::dollar_round($variant->price)?></td>
				<td><?=$variant->in_stock_count()?></td>
				<td><?=html::anchor('admin/variants/edit/' . $variant, 'edit', array('class' => 'edit-variant', 'id' => $variant))?></td>
				<td><?=html::anchor('#', html::image('public/images/order.gif'), array('class' => 'set-sort-order'))?></td>
				<td>
					<?=form::open('admin/variants/delete/' . $variant)?>
						<?=form::hidden('redirect_override', url::current(true))?>
						<?=form::hidden('id', $variant)?>
						<?=form::submit('Delete', 'Delete')?>
					<?=form::close()?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?=html::anchor('admin/variants/new_one/' . $product, 'New Inventory Item', array('id' => 'add-new-variant'))?>

<?php foreach($product->variants as $variant): ?>
	<?=View::factory('admin/variants/_nested_form')->set('variant', $variant)?>
<?php endforeach; ?>

<script type="text/javascript">

	$(function(){
		
		$('.variant-editing').hide();

		$('#add-new-variant').click(function(){
			$.get($(this).attr('href'), function(data){
				$('#edit-variants').after(data);
				$('#add-new-variant').remove();
			});
			return false;
		});
	});

</script>