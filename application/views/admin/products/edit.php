<?=form::open('admin/products/update/' . $product)?>
	<?=View::factory('admin/products/_form')->set('product', $product)?>
<?=form::close()?>