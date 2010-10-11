<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=meta::get_title()?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="<?=meta::get_description()?>" />
<meta name="keywords" content="<?=meta::get_keywords()?>" />
<?=html::stylesheet('public/css/main')?>
<?=html::script('http://use.typekit.com/vcn2nvo.js')?>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?=html::script('public/js/jquery')?>
<?=html::script('public/js/cycle')?>
<?=html::script('public/js/application')?>
</head>
<body id="<?=Router::$controller?>" class="<?=Router::$method?>">
	<div id="wrapper">
		<div id="header">
			<div id="logo" class="left">
				<h1>Stu's Coffee Shoppe</h1>
			</div>
			<div id="navigation" class="right">
				<ul>
					<li><?=html::anchor('products', 'Shop')?></li>
					<li><?=html::anchor('page/about', 'About')?></li>
					<li><?=html::anchor('blog', 'Blog')?></li>
					<li><?=html::anchor('page/contact', 'Contact')?></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		
		<div id="sidebar" class="left">
			<div id="categories" class="box">
				<h2>Hand Crafted Roasts</h2>
				<ul>
					<?php foreach(ORM::factory('product')->find_all() as $product): ?>
						<li><?=html::anchor($product->show_path(), $product->title)?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			
			<div id="shopping-cart-side-bar" class="box">
				<h2>Shopping Cart</h2>
				<h4 class="cart-empty">Your cart is empty.  <br />Time for a fresh cup.</h4>
			</div>
		</div>
		<div id="main" class="right">