<h2>Billing &amp; Payment</h2>

<?=form::open('cart/process')?>
	<fieldset>
		<legend>Billing Address</legend>
		<div class="form-fields">
			<?=form::label('billing[first_name]', 'First Name')?>
			<?=form::input('billing[first_name]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('billing[last_name]', 'Last Name')?>
			<?=form::input('billing[last_name]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('billing[address]', 'Street Address')?>
			<?=form::input('billing[address]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('billing[city]', 'City')?>
			<?=form::input('billing[city]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('billing[state]', 'State')?>
			<?=form::input('billing[state]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('billing[postal_code]', 'Zip/Postal Code')?>
			<?=form::input('billing[postal_code]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('billing[country]', 'Country')?>
			<?=form::input('billing[country]')?>
		</div>
	</fieldset>
	
	<fieldset>
		<legend>Shipping Address</legend>
		<div class="form-fields">
			<?=form::label('shipping[first_name]', 'First Name')?>
			<?=form::input('shipping[first_name]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('shipping[last_name]', 'Last Name')?>
			<?=form::input('shipping[last_name]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('shipping[address]', 'Street Address')?>
			<?=form::input('shipping[address]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('shipping[city]', 'City')?>
			<?=form::input('shipping[city]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('shipping[state]', 'State')?>
			<?=form::input('shipping[state]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('shipping[postal_code]', 'Zip/Postal Code')?>
			<?=form::input('shipping[postal_code]')?>
		</div>
		
		<div class="form-fields">
			<?=form::label('shipping[country]', 'Country')?>
			<?=form::input('shipping[country]')?>
		</div>
	</fieldset>
	<?=form::submit('submit_billing', 'Continue to Order Review')?>
<?=form::close()?>