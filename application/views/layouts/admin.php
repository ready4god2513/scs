<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=meta::get_title()?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="<?=meta::get_description()?>" />
<meta name="keywords" content="<?=meta::get_keywords()?>" />
<?=html::stylesheet('public/css/admin')?>
<?=html::script('public/js/admin')?>
</head>
<body id="<?=Router::$controller?>" class="<?=Router::$method?>">
	<div class="container">
		<div id="header">
			<div id="logo" class="left">
				<h1><?=html::anchor('admin', store::name())?></h1>
			</div>
			<ul id="sub-navigation" class="right">
				<li><?=html::anchor('admin/account', 'Account')?></li>
				<li><?=html::anchor('admin/support', 'Support')?></li>
				<li><?=html::anchor('customers/logout', 'Logout')?></li>
			</ul>
			<ul id="navigation" class="clear">
				<li><?=html::anchor('admin/orders', 'Orders')?></li>
				<li><?=html::anchor('admin/customers', 'Customers')?></li>
				<li><?=html::anchor('admin/products', 'Products')?></li>
				<li><?=html::anchor('admin/blogs', 'Blogs')?></li>
				<li><?=html::anchor('admin/pages', 'Pages')?></li>
				<li><?=html::anchor('admin/themes', 'Themes')?></li>
				<li><?=html::anchor('admin/preferences', 'Preferences')?></li>
			</ul>
		</div>
		<div id="main-content">
			<?=$content?>
		</div>
	</div>
	<div id="footer">
		<ul>
			<li><?=html::anchor(Kohana::config('config.app_site') . 'forum', 'Forum')?></li>
			<li><?=html::anchor(Kohana::config('config.app_site') . 'blog', 'Blog')?></li>
			<li><?=html::anchor(Kohana::config('config.app_site') . 'page/terms-and-conditions', 'Terms &amp; Conditions')?></li>
			<li><?=html::anchor(Kohana::config('config.app_site') . 'page/privacy-policy', 'Privacy Policy')?></li>
		</ul>
	</div>
</body>
</html>