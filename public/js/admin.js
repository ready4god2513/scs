$(function(){
	
	
	$('.edit-variant').click(function(){
		var id = $(this).attr('id');
		$('#variant-' + id).slideToggle();
		
		return false;
	});
	
	$('.track-stock-dropdown').change(function(){
		var id = $(this).attr('id');
		show_track_inventory(id);
	});
	
	
	
});

function show_track_inventory(id)
{
	if($('select#' + id).val() == 1)
	{
		$('#choose-inventory-options-' + id).slideDown();
	}
	else
	{
		$('#choose-inventory-options-' + id).slideUp();
	}
}