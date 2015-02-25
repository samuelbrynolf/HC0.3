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
			
			// erase placeholder—just for demo purpuose used in js-components.php
				var placeholder = $('#js-mq-example');
				var placeholderText = placeholder.text();
				
				function needed_for_demo_example1(){
					placeholder.text('Yey! Alpha mode!');
				}
			// end erase
			
			function mediaChecker(){
				var screen = getActiveMQ();
				
				// erase demo
				$('#js-mq-currentexample').text('Current screen: ' + screen);
				
					if(screen == 'aq'){
						needed_for_demo_example1();
					} else {
						placeholder.text(placeholderText);
					}
				// end erase
				
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
	} // end mq_scripts
	
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
	
	function tappyItems(){	
		$('a.tappilyTap').bind('tap', function(e){
			window.location=e.target.href;
		});
	} // end tappyItems()
	
	function modaltrigger(){
		var modalOpener = $('.js-openmodal');
		var modalClose = $('.js-closemodal');
		
		modalOpener.bind('tap', function(e){
			var $this = $(this);
			var modalTarget = $($this.attr('data-modaltarget'));
			modalTarget.addClass('s-is-active');
		});
		
		modalClose.bind('tap', function(){
			var $this = $(this);
			var activeModal = $this.parents('.o-modal');
			
			activeModal.removeClass('s-is-active');
		});
	} // end modaltrigger
	
	function alerttrigger(){
		var alertTrigger = $('.js-openalert');
		
		alertTrigger.bind('tap', function(e){
			var $this = $(this);
			var alertTarget = $($this.attr('data-alert-target'));
			
			alertTarget.addClass('s-is-active');
			
			setTimeout(function(){
				alertTarget.removeClass('s-is-active');
			}, 2500);
		});
	} // end alerttrigger
	
	function smoothScroll(){
  	$('.js-jumper').bind('tap', function(e){
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
    	&& location.hostname == this.hostname) {
      	var jQuerytarget = $(this.hash);
        jQuerytarget = jQuerytarget.length && jQuerytarget || jQuery('[name=' + this.hash.slice(1) +']');
        if (jQuerytarget.length) {
        	var targetOffset = jQuerytarget.offset().top - 24 ;
          $('html,body').animate({scrollTop: targetOffset}, 750);
          //e.preventDefault(); Eftersom vi kör tappy, dödas default automatiskt
         } 
       }
	 	});	
 	} // end smoothScroll()
	
	function formInteractions(){
		if($('.m-form').length){
			function checkedStyles(){
				$('input:checked').parent('.a-label').addClass('s-is-checked');
				$('input:disabled').parent('.a-label').addClass('s-is-disabled');
				$('form[role="form"]').on('click', '.a-label.checkbox, .a-label.radio', function(){
					var $this = $(this);
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
	} // end formInteractions
	
	function fitvids(){
		if($('.js-videoParent').length){
			var videoParent = $('.js-videoParent');
			videoParent.fitVids();
		}
	}

  function expandSection(){
    if($('.m-expand-section').length){
      var expandSection = $('.m-expand-section');
      
      expandSection.each(function(){
      	var $this = $(this);
      	var fullHeight = $this.innerHeight();
      	var divideBy = $this.attr('data-divide-by');
      	var expandText = $this.attr('data-expand-text');
      	
				var expandButton = $('<button class="a-expand-section__button">'+expandText+'</button>');
      	$this.css('max-height', fullHeight/divideBy);
      	expandButton.insertAfter($this);
      	
      	expandButton.bind('tap', function(){
	        var $this = $(this);
	        $this.prev(expandSection).css('max-height', fullHeight).addClass('s-is-expanded');
	        $this.addClass('s-is-hidden');
	      });
      }); 
    }
	} // end expandSection
	
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
     		var $this = $(this);
        var thisParent = $this.parent('.m-toggled');
        var thisNext = $this.next('.m-toggled__elem');
        thisParent.toggleClass('s-is-active');
        thisNext.slideToggle('fast').removeClass('s-is-hidden');
      });
  	}
	} // end toggleElems
	
	function gridViewEffects(){

		function fadeImg(elem){
			var fadeTarget = 	elem.find('img');
			var screen = getActiveMQ();
			
			fadeTarget.each(function(i){
				var $this = $(this);
				
				setTimeout(function(){
					$this.css('opacity', '1');
				}, i*150);
			});
		}
		
		if(!(screen == 'aq')){
			$('.js-medialoadEffect').viewportChecker({
	  		classToAdd: 's-is-active', 
	  		offset: 168,
	  		callbackFunction: fadeImg,
	  		repeat: false
			});
		} 
		// fadeImg();
	}
	
	
	// FUNCTION CALLS -------------------------------------------------------------------------------------------------------
 	
	mq_scripts();
	trigByLoad();
 	tappyItems();
 	modaltrigger();
 	alerttrigger();
 	smoothScroll();
 	formInteractions();
 	fitvids();
 	toggleElems();
 	expandSection();
 	gridViewEffects();
 	
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