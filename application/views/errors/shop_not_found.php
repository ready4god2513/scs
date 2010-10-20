
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Shop Not Found</title>

<style type="text/css">
body {
	margin: 0;
	text-align: center;
	font: 1em/ 1.3em "Lucida Grande", Arial, Arial, sans-serif;
	background-color: #efefef;
}

div.outer {
	font-size: 75%;
	position: absolute;
	left: 50%;
	top: 50%;
	width: 400px;
	height: 300px;
	margin-left: -200px;
	margin-top: -150px;
}

.dialog {
	padding: 0;
	background-color: white;
	border-top: 1px solid #ddd;
	border-right: 1px solid #ccc;
	border-left: 1px solid #ddd;
	border-bottom: 1px solid #ccc;
}

div.error {
	margin-left: 0px;
	padding-left: 3px;
	border-left: 2px solid #aaa;
	overflow: auto;
	background: #eee;
}

h1 {
	font-size: 100%;
	background: #000;
	color: white;
	margin: 0;
	padding: 5px 10px;
}

.block {
	text-align: left;
	width: 300px;
	margin: 0 auto;
	margin-top: 2em;
}

h1 span {
	float: right;
	font-size: 75%;
	color: #666;
}
</style>

</head>

<body>

<div class="outer">

	<div class="dialog" style="text-align: center;">
		<h1><span>404</span>Shop Not Found</h1>
		<div class="block">
			<p>The shop <?=$_SERVER['SERVER_NAME']?> could not be found.</p>
		</div>
	</div>
</div>
</body>
</html>
