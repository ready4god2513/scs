		</div>
		<div class="clear"></div>	
		<div id="footer" class="box">
			<ul class="left">
				<li>Awesome &amp; Upcoming</li>
				<?php foreach(ORM::factory('blog')->find_all() as $page): ?>
					<li><?=html::anchor($page->show_path(), $page->name)?></li>
				<?php endforeach; ?>
			</ul>
			
			<ul class="left">
				<li>Our Coffee</li>
				<?php foreach(ORM::factory('page_category')->where('name', 'information')->find()->pages as $page): ?>
					<li><?=html::anchor($page->show_path(), $page->name)?></li>
				<?php endforeach; ?>
			</ul>
			
			<ul class="left">
				<li>Roasts</li>
				<?php foreach(ORM::factory('product')->find_all() as $product): ?>
					<li><?=html::anchor($product->show_path(), $product->name)?></li>
				<?php endforeach; ?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>
