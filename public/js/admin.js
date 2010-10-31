$(function(){
	$('.edit-variant').click(function(){
		$('#variant-' + $(this).attr('id')).slideToggle();
		return false;
	});
});