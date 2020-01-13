jQuery(function($){
	
	$(document).ready(function() {
		if(cur_page_data.pageid == 1 || cur_page_data.pagename == "home"){
			$('.header').css('padding-bottom','4em');	
		}
		else{
			$('.header').css('display','none');
		}
	});
	
	$(document).ready(function() {
		
		var	$window = $(window),
			$body = $('body')
			
		skel.breakpoints({
			xlarge:	'(max-width: 1680px)',
			large:	'(max-width: 1280px)',
			medium:	'(max-width: 980px)',
			small:	'(max-width: 736px)',
			xsmall:	'(max-width: 480px)'
		});
		
		$window.on('load', function() {
			$('.smue-image-obj').each(function(){
				
				var anchor_href = ($(this).children('a').attr('href'));
				var img_src = ($(this).find('img').attr('src'));
			
				if( anchor_href == img_src){
					$(this).poptrox({
						onPopupClose: function() { $body.removeClass('is-covered'); },
						onPopupOpen: function() { $body.addClass('is-covered'); },
						baseZIndex: 10001,
						useBodyOverflow: false,
						usePopupEasyClose: true,
						overlayColor: '#000000',
						overlayOpacity: 0.75,
						popupLoaderText: '',
						fadeSpeed: 500,
						usePopupDefaultStyling: false,
						windowMargin: (skel.breakpoint('small').active ? 5 : 50)
					});
				}
			});

		});
			
	});
});
