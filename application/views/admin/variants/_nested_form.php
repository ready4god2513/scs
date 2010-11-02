<div id="variant-<?=$variant?>" class="variant-editing">
	<?php $index = uniqid() ?>
	<?=form::hidden('variant[' . $index . '][id]', $variant)?>
	<table>
		<tr>
			<?php foreach($variant->product->options as $option): ?>
				<th><?=$option->name?></th>
			<?php endforeach; ?>
		</tr>
		<tr>
			<?php foreach($variant->options_variant as $option): ?>
				<?php $rand = uniqid(); ?>
				<td>
					<?=form::hidden('variant[' . $index . '][options_variant][' . $rand . '][id]', $option->id)?>
					<?=form::input('variant[' . $index . '][options_variant][' . $rand . '][value]', $option->value)?>
				</td>
			<?php endforeach; ?>
		</tr>
	</table>
	<table>
		<tr>
			<th>SKU</th>
			<th>Price</th>
			<th>Compare at Price</th>
			<th>Shipping Weight</th>
		</tr>
		<tr>
			<td><?=form::input('variant[' . $index . '][sku]', $variant->sku)?></td>
			<td><?=form::input('variant[' . $index . '][price]', format::dollar_round($variant->price))?></td>
			<td><?=form::input('variant[' . $index . '][compare_price]', format::dollar_round($variant->compare_price))?></td>
			<td><?=form::input('variant[' . $index . '][weight]', format::weight($variant->weight))?></td>
		</tr>
	</table>
	<div class="form-fields">
		<?=form::label('variant[' . $index . '][taxable]', 'Charge Tax')?>
		<?=form::hidden('variant[' . $index . '][taxable]', false)?>
		<?=form::checkbox('variant[' . $index . '][taxable]', true, $variant->taxable)?>
	</div>
	<div class="form-fields">
		<?=form::label('variant[' . $index . '][require_address]', 'Require Shipping Address')?>
		<?=form::hidden('variant[' . $index . '][require_address]', false)?>
		<?=form::checkbox('variant[' . $index . '][require_address]', true, $variant->require_address)?>
	</div>
	<div class="form-fields">
		<?=form::label('variant[' . $index . '][track_stock]', 'Track Inventory')?>
		<?=form::dropdown(array('name' => 'variant[' . $index . '][track_stock]', 'id' => $index, 'class' => 'track-stock-dropdown'), array(false => 'Don\'t Keep Inventory', true => 'Maintain Stock Level'), $variant->track_stock)?>
	</div>
	
	<div id="choose-inventory-options-<?=$index?>" <?php if(!$variant->track_stock): ?>class="hide"<?php endif; ?>>
		<div class="form-fields">
			<?=form::label('variant[' . $index . '][track]', 'How many in Stock?')?>
			<?=form::input('variant[' . $index . '][stock]', $variant->stock)?>
		</div>
		
		<div class="form-fields">
			<?=form::label('variant[' . $index . '][track]', 'Out of Inventory')?>
			<?=form::dropdown('variant[' . $index . '][allow_out_of_stock_purchases]', array(
				true => 'Allow Purchases',
				false => 'Do not Allow Purchases'
			), $variant->allow_out_of_stock_purchases)?>
		</div>
	</div>
</div>