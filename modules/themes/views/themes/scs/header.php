<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=meta::get_title()?> | Stu's Coffee Shoppe</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="<?=meta::get_description()?>" />
<meta name="keywords" content="<?=meta::get_keywords()?>" />
<?=html::stylesheet(theme::static_file_path() . '/css/main')?>
<?=html::script('http://use.typekit.com/vcn2nvo.js')?>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?=html::script(theme::static_file_path() . '/js/jquery')?>
<?=html::script(theme::static_file_path() . '/js/cycle')?>
<?=html::script(theme::static_file_path() . '/js/application')?>
<?=Event::run('layout.header.output')?>
</head>
<body id="<?=Router::$controller?>" class="<?=Router::$method?>">
	<div id="wrapper">
		<div id="header">
			<div id="logo" class="left">
				<h1><?=html::anchor(url::site(), 'Stu\'s Coffee Shoppe')?></h1>
			</div>
			<div id="navigation" class="right">
				<ul>
					<li><?=html::anchor('products', 'Shop')?></li>
					<li><?=html::anchor('page/about', 'About')?></li>
					<li><?=html::anchor('blog', 'Blog')?></li>
					<li><?=html::anchor('page/contact', 'Contact')?></li>
					<?=Event::run('layout.navigation.output')?>
					<li><?=html::anchor('cart', '(' . user::current()->cart->cart_contents_count() . ') ' . inflector::singular('Items', user::current()->cart->cart_contents_count()))?></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		
		<div id="sidebar" class="left">
			<div id="categories" class="box">
				<h2>Hand Crafted Roasts</h2>
				<ul>
					<?php foreach(ORM::factory('product')->find_all() as $product): ?>
						<li><?=html::anchor($product->show_path(), $product->name)?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			
			<div id="latest-blog-entry-synopsis" class="box">
				<h2>Stu's Latest</h2>
				<div class="padd-me">
					<?=ORM::factory('blog')->get_latest_entry_synopsis()?><br />
					<?=html::anchor('blog', 'Read More')?>
				</div>
			</div>
			
			<div id="shopping-cart-side-bar" class="box">
				<?=View::factory('carts/index')?>
			</div>
			
			<?=Event::run('layout.sidebar.output')?>
		</div>
		<div id="main" class="right">
			<?=Event::run('layout.main.top.output')?>