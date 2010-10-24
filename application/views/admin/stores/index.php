<h2><?=$store->name?></h2>
<h6>Store Income: <?=format::dollar_format($store->total_income())?></h6>
<h6>Income Per Day Average: <?=format::dollar_format($store->income_per_day_average())?></h6>