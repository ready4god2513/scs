<h2><?=$customer->username?></h2>
<?=count($customer->orders)?> <?=inflector::plural('order', count($customer->orders))?>