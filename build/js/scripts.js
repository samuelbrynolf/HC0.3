//==============================================================================================================

// ONLOAD PRIO									
// FUNCTIONS						
// FUNCTIONS CALLS
// FALLBACKS

//==============================================================================================================

(function() {
	
	// ONLOAD PRIO  ---------------------------------------------------------------------------------------------
	
	$('html').addClass('transitions');
	
	// FUNCTIONS -------------------------------------------------------------------------------------------------------
	
	function mq_scripts(){
		if($('#getActiveMQ-watcher').length){
		
			var viewPort = $(window);
			var resizeTimeoutId = 0;
			
			function needed_for_alpha_example1(){
				console.log('function run alpha-screen example1');
			}
			
			function needed_for_alpha_example2(){
				console.log('function run alpha-screen example2');
			}
			
			function mediaChecker(){
				var screen = getActiveMQ();
				
				if(screen == 'aq'){
					needed_for_alpha_example1();
					needed_for_alpha_example2();
				}
				
				if(!(screen == 'aq') && !(screen == 'bq')){
					$('.js-JVC').viewportChecker({
		    		classToAdd: 's-is-visible', 
		    		offset: 96,
		    		repeat: false
					});
				}	
				
			} // end mediaChecker
						
			mediaChecker();
			
			viewPort.on('resize', function(){
				clearTimeout(resizeTimeoutId);
				resizeTimeoutId = setTimeout(mediaChecker,300);
			});
		}
	}
	
	function tappyItems(){	
		$('a.tappilyTap').bind('tap', function(e){
			window.location=e.target.href;
		});
	} // end tappyItems()
	
	function smoothScroll(){
  	$('.js-jumper').bind('tap', function(e){
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
    	&& location.hostname == this.hostname) {
      	var jQuerytarget = $(this.hash);
        jQuerytarget = jQuerytarget.length && jQuerytarget || jQuery('[name=' + this.hash.slice(1) +']');
        if (jQuerytarget.length) {
        	var targetOffset = jQuerytarget.offset().top - 24 ;
          $('html,body').animate({scrollTop: targetOffset}, 400);
          //e.preventDefault(); Eftersom vi kör tappy, dödas default automatiskt
         } 
       }
	 	});	
 	} // end smoothScroll()
	
	function toggleElems(){
    if($('.m-toggled').length){
      var toggled = $('.m-toggled');

      toggled.each(function(){
      	var $this = $(this);
        if($this.is('ul')){
         	var box = $this.clone(true);
          box.find('li').slice(1).wrapAll('<li class="m-toggled__elem s-is-hidden"><ul></ul></li>');
          box.find('li:eq(0) > *').addClass('a-toggled__toggler');
          $this.replaceWith(box);
        }
      });

      var toggler = $('.m-toggled__elem').prev();

      toggler.bind('tap', function(){
     		$this = $(this);
        var thisParent = $this.parent('.m-toggled');
        var thisNext = $this.next('.m-toggled__elem');
        thisParent.toggleClass('s-is-active');
        thisNext.slideToggle('fast').removeClass('s-is-hidden');
      });
  	}
	}

  function expandSection(){
    if($('.m-expand-section').length){
      var expandSection = $('.m-expand-section');
      var fullHeight = expandSection.innerHeight();
      var divideBy = expandSection.attr('data-divide-by');
      var expandText = expandSection.attr('data-expand-text');
      var expandButton = $('<button class="a-expand-section__button">'+expandText+'</button>');

      expandSection.css('max-height', fullHeight/divideBy);
      expandButton.insertAfter(expandSection);

      expandButton.bind('tap', function(){
        $this = $(this);
        $this.prev(expandSection).css('max-height', fullHeight).addClass('s-is-expanded');
        $this.addClass('s-is-hidden');
      });
    }
	}
	
	function formInteractions(){
		if($('.m-form').length){
			function checkedStyles(){
				$('input:checked').parent('.a-label').addClass('s-is-checked');
				$('input:disabled').parent('.a-label').addClass('s-is-disabled');
				$('form[role="form"]').on('click', '.a-label.checkbox, .a-label.radio', function(){
					$this = $(this);
					if($this.children().is(':disabled')) return false;
					
					var $thisCheckbox = $this.children('input:checkbox');
					
					if($thisCheckbox.length){
						if($thisCheckbox.is(':checked')){
							$this.addClass('s-is-checked');
						} else {
							$this.removeClass('s-is-checked');
						}
					} else {
						var siblings = $this.siblings();
						
						siblings.removeClass('s-is-checked');
						$this.addClass('s-is-checked');
					}
				});
			}
			checkedStyles();
		}
	}
	
	function trigByLoad(){
		if($('.js-imgLoader').length){
		
			var imgLoader = $('.js-imgLoader');
			
			imgLoader.each(function(i){
				var $this = $(this);
				var posterImg = $this.find('img').eq(0);
				var image = new Image();
				var bgLoader = $this.attr('data-loader');
				
				if(bgLoader == 'true'){
					var loadElem = $('<p class="js-loader"></p>');
					$this.parent().css('position', 'relative');
					$this.parent().append(loadElem);
				}
				
				$(image).on('load', function(){ 
					setTimeout(function(){
						loadElem.fadeOut('fast');
						$this.removeClass('s-is-hidden');
					}, i*300);
				});
				
				image.src = posterImg.attr('src');
				
			});
    }
	}
	
	function fitvids(){
		if($('.js-videoParent').length){
			var videoParent = $('.js-videoParent');
			videoParent.fitVids();
		}
	}
	
	// FUNCTION CALLS -------------------------------------------------------------------------------------------------------
 	
	mq_scripts();
 	tappyItems();
 	smoothScroll();
 	toggleElems();
 	expandSection();
 	formInteractions();
 	trigByLoad();
 	fitvids();
 	
 	// FALLBACKS -------------------------------------------------------------------------------------------------------
 	
	setTimeout(function(){
 		var wflObjects = [
	 		
	 		'.a-components__title', 
	 		'.example-2'
 		
 		].join(', ');

		$(wflObjects).css({
			'visibility' 	: 'visible',
			'opacity' 		: '1',
			'transform'		: 'translate3d(0,0,0)',
		});
	},1000);

})();