<?=form::open('admin/order_comments/create')?>
	<?=form::hidden('redirect_override', url::current(true))?>
	<?=form::hidden('order_id', $order)?>
	<div class="form-fields">
		<?=form::label('comment', 'Add Comment')?>
		<?=form::input('comment')?>
	</div>
<?=form::close()?>