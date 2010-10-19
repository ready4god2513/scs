<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Core
 *
 * Sets the default route to the products controller
 */
$config['_default'] = 'static/home';

/**
  * Since we can't have the method "new", 
  * let's just use "new_one" and redirect all requests to "new" to that
  * @Developer brandon
  * @Date May 17, 2010
  */
$config['(.*)/new'] = '$1/new_one';
$config['admin/(.*)/new'] = 'admin/$1/new_one';


/**
  * Login and register
  * @Developer brandon
  * @Date Oct 12, 2010
  */
$config['(login|register)'] = 'sessions/new_one';


/**
  * Missing Pages and Error Handling
  * @Developer brandon
  * @Date May 17, 2010
  */
$config['errors/404'] = 'errors/error_404';


/**
  * Product Routing
  * @Developer brandon
  * @Date Oct 11, 2010
  */
$config['product/(.*)'] = 'products/show/$1';
$config['category/(.*)'] = 'categories/show/$1';


/**
  * Pages
  * @Developer brandon
  * @Date Oct 11, 2010
  */
$config['page/(.*)'] = 'pages/show/$1';


/**
  * Blog Entries
  * @Developer brandon
  * @Date Oct 11, 2010
  */
$config['blog'] = 'blogs/index';
$config['blog/(.*)'] = 'blogs/show/$1';


/**
  * Shopping Cart
  * @Developer brandon
  * @Date Oct 11, 2010
  */
$config['cart'] = 'carts/index';
$config['cart/(.*)'] = 'carts/$1';


/**
  * Show the order
  * @developer Brandon Hansen
  * @date Oct 18, 2010
  */
$config['order/receipt/(.*)'] = 'orders/show/$1';



/**
  * BEGIN ADMIN ROUTING
  * @developer Brandon Hansen
  * @date Oct 15, 2010
  */
$config['admin'] = 'admin/dashboard/index';