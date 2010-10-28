<?=form::hidden('products_variant[' . $index . '][id]', $variant)?>
<table>
	<tr>
		<th>SKU</th>
		<th>Price</th>
		<th>Compare at Price</th>
		<th>Weight</th>
	</tr>
	<tr>
		<td><?=form::input('products_variant[' . $index . '][sku]', $variant->sku)?></td>
		<td><?=form::input('products_variant[' . $index . '][price]', format::dollar_round($variant->price))?></td>
		<td><?=form::input('products_variant[' . $index . '][compare_price]', format::dollar_round($variant->compare_price))?></td>
		<td><?=form::input('products_variant[' . $index . '][weight]', format::weight($variant->weight))?></td>
	</tr>
</table>
<div class="form-fields">
	<?=form::label('products_variant[' . $index . '][taxable]', 'Charge Tax')?>
	<?=form::hidden('products_variant[' . $index . '][taxable]', false)?>
	<?=form::checkbox('products_variant[' . $index . '][taxable]', true, $variant->taxable)?>
</div>
<div class="form-fields">
	<?=form::label('products_variant[' . $index . '][require_address]', 'Require Shipping Address')?>
	<?=form::hidden('products_variant[' . $index . '][require_address]', false)?>
	<?=form::checkbox('products_variant[' . $index . '][require_address]', true, $variant->require_address)?>
</div>
<div class="form-fields">
	<?=form::label('products_variant[' . $index . '][track_stock]', 'Track Inventory')?>
	<?=form::dropdown('products_variant[' . $index . '][track_stock]', array(false => 'Don\'t Keep Inventory', true => 'Maintain Stock Level'), $variant->track_stock)?>
</div>