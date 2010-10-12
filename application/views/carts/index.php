<h2>Shopping Cart</h2>
<?php if(!user::current()->cart->cart_contents_count()): ?>
	<h4 class="cart-empty">Coffee.  You need some.  Get it while it's hot.</h3>
<?php endif; ?>