<div id="content" class="box">
	
	<h2>Shopping Cart</h2>
	<?php if(!user::current()->cart->cart_contents_count()): ?>
		<h3 class="nothing-in-cart">Coffee.  You need some in your cart.</h3>
	<?php endif; ?>
</div>