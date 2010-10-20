<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=meta::get_title()?> | Stu's Coffee Shoppe</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="<?=meta::get_description()?>" />
<meta name="keywords" content="<?=meta::get_keywords()?>" />
<?=theme::stylesheet('css/main')?>
<script type="text/javascript" src="//use.typekit.com/vcn2nvo.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?=theme::script('js/jquery')?>
<?=theme::script('js/cycle')?>
<?=theme::script('/js/application')?>
<?=theme::render_script()?>
</head>
<body id="<?=theme::body_id()?>" class="<?=theme::body_class()?>">
	<div id="wrapper">
		<?=theme::render_header()?>
		<div id="header">
			<div id="logo" class="left">
				<h1><?=html::anchor(url::site(), 'Stu\'s Coffee Shoppe')?></h1>
			</div>
			<div id="navigation" class="right">
				<ul>
					<?php foreach(links::get('main') as $link): ?>
						<li><?=$link->display()?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		
		<div id="sidebar" class="left">
			<div id="categories" class="box">
				<h2>Hand Crafted Roasts</h2>
				<ul>
					<?php foreach(ORM::factory('product')->find_all() as $product): ?>
						<li><?=$product->link()?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			
			<div id="latest-blog-entry-synopsis" class="box">
				<h2>Stu's Latest</h2>
				<div class="padd-me">
					<?=blog::latest_entry_synopsis()?><br />
					<?=html::anchor('blog', 'Read More')?>
				</div>
			</div>
			
			<div id="shopping-cart-side-bar" class="box">
				<?=View::factory('carts/index')?>
			</div>
		</div>
		
		<div id="main" class="right">
			<div id="content" class="box">
				<?=$content?>
			</div>
		</div>
		
		<div class="clear"></div>	
		<div id="footer" class="box">
			
			<ul class="left">
				<li>Roasts</li>
				<?php foreach(products::all() as $product): ?>
					<li><?=$product->link()?></li>
				<?php endforeach; ?>
			</ul>
			
			<ul class="left">
				<li>Resources</li>
				<?php foreach(links::get('footer') as $link): ?>
					<li><?=$link->display()?></li>
				<?php endforeach; ?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<?=theme::render_footer()?>
</body>
</html>