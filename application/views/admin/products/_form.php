<div class="left large-half">
	<div class="form-fields">
		<?=form::label('name', 'Name')?>
		<?=form::input('name', $product->name)?>
	</div>
	
	<div class="form-fields">
		<?=form::label('slug', 'URL')?>
		<?=form::input('slug', $product->slug)?>
	</div>
	
	<div class="form-fields">
		<?=form::label('description', 'Description')?>
		<?=form::textarea('description', $product->description)?>
	</div>
	
	<div id="admin-product-variants">
		<h5>Variants</h5>
		<?php $index = 0; ?>
		<?php foreach($product->products_variants as $variant): ?>
			<?php $index++ ?>
			<?=View::factory('admin/products_variants/_nested_form')->set('variant', $variant)->set('index', $index)?>
		<?php endforeach; ?>
	</div>
	
	<div class="form-fields">
		<?=form::submit('submit', 'Submit')?>
	</div>
</div>
<div class="right small-half">

	<div class="form-fields">
		<?=form::label('vendor_id', 'Vendor')?>
		<?=form::dropdown('vendor_id', ORM::factory('vendor')->select_list('id', 'name'), $product->vendor)?>
	</div>
	
	<div class="form-fields" id="categories">
		<?=form::label('categories', 'Categories')?>
		<?=form::many_to_many($product, ORM::factory('category')->find_all(), 'categories', 'name', 'table')?>
	</div>
	
	<div class="form-fields">
		<?=form::label('variants', 'Options')?>
		<?=form::many_to_many($product, ORM::factory('variant')->find_all(), 'variants')?>
	</div>
	
	<div class="form-fields">
		<h5>Product Images</h5>
		<div id="admin-product-image">
			<?php foreach($product->images as $image): ?>
				<?=html::image($image->thumburl)?>
			<?php endforeach; ?>
		</div>
		<?=form::upload('upload', 'upload')?>
	</div>
</div>