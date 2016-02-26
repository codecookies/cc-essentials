jQuery(document).ready(function($){

	$('.cce-loveit').live('click', function() {
    		var link = $(this);
    		if(link.hasClass('loved')) return false;
			
			link.addClass('loved');
			
    		var id = $(this).attr('id'),
    			suffix = link.find('.cce-loveit-suffix').text();
			
    		$.post(cce_loveit.ajaxurl, { action:'cce_loveit', loves_id:id, suffix:suffix }, function(data){
    			link.html(data).addClass('loved').attr('title',cce_loveit.loved_text);
    		});
		
    		return false;
	});
	
	
    $('.cce-loveit').each(function(){
		var id = $(this).attr('id');
		$(this).load(cce_loveit.ajaxurl, { action:'cce_loveit', post_id:id });
	});

});