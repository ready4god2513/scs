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
	<div id="header" class="container">
		<ul id="navigation">
			<li><?=html::anchor('admin/orders', 'Orders')?></li>
			<li><?=html::anchor('admin/customers', 'Customers')?></li>
		</ul>
	</div>
	<div id="content" class="container">
		<?=$content?>
	</div>
	<div id="footer" class="container">
	</div>
</body>
</html>