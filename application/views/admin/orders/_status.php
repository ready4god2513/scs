<?php if($order->show_mark_paid()): ?>
	<?=form::open('admin/orders/mark_as_paid')?>
		<?=form::hidden('status', 'paid')?>
		<?=form::hidden('id', $order)?>
		<?=form::submit('paid', 'Mark as Paid')?>
	<?=form::close()?>
<?php endif; ?>

<?php if($order->show_mark_shipped()): ?>
	<?=form::open('admin/orders/mark_as_shipped')?>
		<?=form::hidden('status', 'shipped')?>
		<?=form::hidden('id', $order)?>
		<?=form::submit('ship', 'Mark as Shipped')?>
	<?=form::close()?>
<?php endif; ?>

<?php if($order->show_mark_complete()): ?>
	<?=form::open('admin/orders/mark_as_complete')?>
		<?=form::hidden('status', 'complete')?>
		<?=form::hidden('id', $order)?>
		<?=form::submit('complete', 'Mark Complete')?>
	<?=form::close()?>
<?php endif; ?>

<?php if($order->show_mark_refunded()): ?>
	<?=form::open('admin/orders/refund')?>
		<?=form::hidden('status', 'refunded')?>
		<?=form::hidden('id', $order)?>
		<?=form::submit('refund', 'Refund')?>
	<?=form::close()?>
<?php endif; ?>