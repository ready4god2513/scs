<?php

class cart_Core
{
	
	
	/**
	  * Get the cart
	  * @Developer brandon
	  * @Date Oct 20, 2010
	  */
	public static function get()
	{
		if(customer::logged_in())
		{
			return customer::current()->load_cart();
		}
		else
		{
			if(Session::instance()->get('cart_' . store::get()))
			{
				return ORM::factory('cart', Session::instance()->get('cart_' . store::get()));
			}
			else
			{
				$cart = ORM::factory('cart');
				$cart->save();
				Session::instance()->set('cart_' . store::get(), (string) $cart);
				return $cart;
			}
		}
	}
	
	
}