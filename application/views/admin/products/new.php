<?=form::open('admin/products/create/')?>
	<?=View::factory('admin/products/_form')->set('product', $product)?>
<?=form::close()?>