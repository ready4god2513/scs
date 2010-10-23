<?=form::open('orders/update/'. $order)?>
	<?=form::hidden('status', 'shipped')?>
	<?=form::hidden('id', $order)?>
	<?=form::submit('ship', 'Mark Shipped')?>
<?=form::close()?>