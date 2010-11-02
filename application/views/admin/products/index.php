<div class="buttons">
	<?=html::anchor('admin/products/new', 'New Product')?>
	<?=html::anchor('admin/categories', 'Categories')?>
</div>
<table class="sortable_table">
	<thead>
		<tr>
			<th></th>
			<th>Product</th>
			<th>Inventory</th>
			<th>Number Sold</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($products as $product): ?>
			<tr <?php if(!$product->available_for_sale()) : ?>class="sold-out"<?php endif;?>>
				<td><?=html::image($product->default_thumb())?></td>
				<td>
					<p><?=html::anchor($product->edit_path(), $product->name)?></p>
					<?php foreach($product->categories as $category): ?>
						<p class="note"><?=$category->name?></p>
					<?php endforeach; ?>
				</td>
				<td>
					<ul class="product-variants-table-list">
						<?php foreach($product->variants as $variant): ?>
							<li>
								<?php foreach($variant->options_variant as $option): ?>
									<p class="note"><?=$option->value?></p>
								<?php endforeach; ?>
								<p class="highlight <?php if($variant->in_stock_count() == 0):?>out-of-stock<?php endif; ?>"><?=$variant->in_stock_count()?></p>
							</li>
						<?php endforeach; ?>
					</ul>
				</td>
				<td><?=$product->number_of_sales()?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>