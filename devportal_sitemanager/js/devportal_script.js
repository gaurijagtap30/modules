
(function($){

$(document).ready(function(){
	$('#save-search').click(function(){
		var term = $('#edit-keys').val();
		term = term.trim();
		if(term!=''){
			$(this).remove();
			$('.save-loader').show();
			$.get(Drupal.settings.basePath+'save-search/'+term, function(data) {
				if(data=='neutral'){
					$('.save-loader').html('Search term already exist.<a href="/my-saved-searchs"> View your saved searchs </a>');
				}
				else if(data=='true'){
					$('.save-loader').html('Your search term has been saved successfully.<a href="/my-saved-searchs"> View your saved searchs </a>');
				}
				else{
					$('.save-loader').html('Saving search term was unsuccessfully, Kindly try it once again');
				}
			});
		}
		else{
			alert('Please enter a valid search term.');
		}
	});
})


})(jQuery);